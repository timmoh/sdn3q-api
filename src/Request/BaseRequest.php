<?php

namespace SDN3Q\Request;

use SDN3Q\Exception\ApiException;
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

	protected static $subUrl             = '';
	protected static $additionalHeader   = []; //additional http header
	protected static $requestParm        = []; //parameter to send
	protected static $requestParmAsJson  = true; //send parameter as via json (true)
	protected static $requestParmAsQuery = false; //send parameter as via query (true
	protected static $possibleParm       = []; //possible parameter that could be filled
	protected static $endpoint           = null;
	protected static $method             = 'get'; //http method

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
	 * @return string
	 */
	protected static function apiUrlRequest() {
		$url = [static::apiBaseUrl()];

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
	 * Get Response
	 *
	 * @return null|string
	 * @throws ApiException
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	protected static function getResponse() {
		try {
			$url          = static::apiUrlRequest();
			$request      = new \GuzzleHttp\Psr7\Request(strtoupper(self::$method), $url);
			$requestParms = [];
			if (!empty(self::buildHeader())) {
				$requestParms = ['headers' => self::buildHeader()];
			}
			if (self::$requestParmAsJson) {
				$requestParms['json'] = static::$requestParm;
			}

			$response = self::$httpclient->send($request, $requestParms);

			self::checkStatusCode($response->getStatusCode());
			self::$response = $response->getBody()->getContents();
			self::$responseHeader = $response->getHeaders();
			return self::$response;

		} catch (\GuzzleHttp\Exception\RequestException $e) {
			$errorResponse = json_decode($e->getResponse()->getBody(true)->getContents(), true);
			throw new ApiException($errorResponse['message'], $e->getResponse()->getStatusCode());
		} catch (\Exception $e) {
			throw $e;
		} finally {
			self::$subUrl             = '';
			self::$additionalHeader   = []; //additional http header
			self::$requestParm        = []; //parameter to send
			self::$requestParmAsJson  = true; //send parameter as via json (true)
			self::$requestParmAsQuery = false; //send parameter as via query (true
			self::$possibleParm       = []; //possible parameter that could be filled
			self::$endpoint           = null;
			self::$method             = 'get'; //http method
		}

	}

	/**
	 * Checks Status of Return Code
	 *
	 * @param $statusCode
	 *
	 * @throws NoContent
	 */
	protected static function checkStatusCode($statusCode) {
		if ($statusCode == 204) {
			throw new NoContent();
		}

	}
}