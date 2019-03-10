<?php

namespace SDN3Q\Request;

use GuzzleHttp\TransferStats;
use SDN3Q\Exception\ApiException;
use SDN3Q\Exception\InvalidApiKey;
use SDN3Q\Exception\InvalidReturnCode;
use SDN3Q\Exception\NoContent;

class BaseRequest {

	/**
	 * @var \GuzzleHttp\Client|null
	 */
	protected static $httpclient = null;

	/**
	 * @var string|null
	 */
	protected static $response = null;
	/**
	 * @var array|null
	 */
	protected static $responseHeader = null;
	/**
	 * @var \SDN3Q\Client|null
	 */
	protected static $client = null;

	protected static $subUrl = '';
	/**
	 * additional http header
	 * @var array
	 */
	protected static $additionalHeader = [];
	/**
	 * parameter to send via post/put
	 * @var array
	 */
	protected static $requestParm = [];
	/**
	 * send parameter as via json (true)
	 * @var bool
	 */
	protected static $requestParmAsJson = true;
	/**
	 * send parameter as via query (true)
	 * @var bool
	 */
	protected static $requestParmAsQuery = false;
	/**
	 * possible parameter that could be filled
	 * @var array
	 */
	protected static $possibleParm = [];
	/**
	 * API Endpoint
	 * @var string|null
	 */
	protected static $endpoint = null;
	/**
	 * HTTP Method
	 * @var string
	 */
	protected static $method = 'get';

	/**
	 * Response Type
	 * @var string
	 */
	protected static $expected_response = 'json';

	/**
	 * BaseRequest constructor.
	 *
	 * @param \SDN3Q\Client $client
	 */
	function __construct(\SDN3Q\Client $client) {
		self::$client     = $client;
		self::$httpclient = new \GuzzleHttp\Client();
	}

	/**
	 * Build Base URL for API
	 * @return string
	 */
	protected static function apiBaseUrl() {
		return self::$client->apiProtocol . '://' . self::$client->baseUrl . '/v' . self::$client->apiVersion . '';
	}

	/**
	 * Build complete URL for Api Endpoint
	 *
	 * @param string $url
	 *
	 * @return string
	 */
	protected static function apiUrlRequest($url = null) {
		if (!is_null($url)) {
			$url = [$url];
		} else {
			$url = [static::apiBaseUrl()];
		}

		if (!empty(static::$endpoint)) {
			$url[] = static::$endpoint;
		}
		if (!empty(static::$subUrl)) {
			$url[] = static::$subUrl;
		}
		$returnUrl = implode('/', $url);

		//if parameter should be send via query url?foo=bar
		if (self::$requestParmAsQuery) {
			$returnUrl .= '?' . http_build_query(self::$requestParm);
		}

		return $returnUrl;
	}

	/**
	 * Build Header for HTTP API Request
	 * @return array
	 * @throws \Exception
	 */
	protected static function buildHeader() {
		try {
			return array_merge(self::$additionalHeader, self::$client->apiHeader());
		} catch (\Exception $e) {
			throw $e;
		}

	}

	/**
	 * Build Parm for Request
	 * @return array
	 */
	protected static function buildReqeustParm() {
		$parms = [];
		foreach (static::$possibleParm AS $key) {
			if (isset(static::$requestParm[$key]) && !empty(static::$requestParm[$key])) {
				$parms[$key] = static::$requestParm[$key];
			}
		}

		return $parms;
	}

	/**
	 * Get Response form HTTP Api Request and Check if it's valid
	 *
	 * @param string $url
	 *
	 * @return string|null
	 * @throws ApiException
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	protected static function getResponse($url = null) {
		try {
			$url          = static::apiUrlRequest($url);
			$request      = new \GuzzleHttp\Psr7\Request(strtoupper(self::$method), $url);
			$requestParms = [];
			if (!empty(self::buildHeader())) {
				$requestParms = ['headers' => self::buildHeader()];
			}
			if (self::$requestParmAsJson) {
				$requestParms['json'] = static::$requestParm;
			}
			$requestParms['on_stats'] = function (TransferStats $stats) use (&$effectiveUrl) {
				$effectiveUrl = $stats->getEffectiveUri();
			};
			$response                 = self::$httpclient->send($request, $requestParms);
			self::checkStatusCode($response->getStatusCode());
			self::checkEffectiveUrl($effectiveUrl);
			self::$response = $response->getBody()->getContents();
			self::checkResponse(self::$response);
			self::$responseHeader = $response->getHeaders();
			return self::$response;

		} catch (\GuzzleHttp\Exception\RequestException $e) {
			$errorResponse = json_decode($e->getResponse()->getBody(true)->getContents(), true);
			throw new ApiException($errorResponse['message'], $e->getResponse()->getStatusCode());
		} catch (\Exception $e) {
			throw $e;
		} finally {
			self::resetRequestParameter();
		}

	}

	/**
	 * Reset Parameter
	 */
	protected static function resetRequestParameter() {
		self::$subUrl             = '';
		self::$additionalHeader   = [];
		self::$requestParm        = [];
		self::$requestParmAsJson  = true;
		self::$requestParmAsQuery = false;
		self::$possibleParm       = [];
		self::$endpoint           = null;
		self::$method             = 'get';
	}

	/**
	 * Checks Status of Return Code
	 *
	 * @param string $statusCode
	 *
	 * @throws NoContent
	 */
	protected static function checkStatusCode(string $statusCode) {
		if ($statusCode == 204) {
			throw new NoContent();
		}

	}

	/**
	 * Checks Url if its redirected to login page
	 *
	 * @param string $url
	 *
	 * @throws InvalidApiKey
	 */
	protected static function checkEffectiveUrl(string $url) {
		$urlParsed = parse_url($url);
		if (strpos($urlParsed['path'], 'login') > 0) {
			throw new InvalidApiKey();
		}

	}

	/**
	 * @param string $content
	 *
	 * @throws InvalidReturnCode
	 */
	protected static function checkResponse(string $content) {


		switch (self::$expected_response) {
			case 'json':
				json_decode($content);
				if (json_last_error() != JSON_ERROR_NONE) {
					throw new InvalidReturnCode();
				}
				break;
			default:
				break;
		}

	}
}