<?php

namespace SDN3Q\Request;


use SDN3Q\Exception\ApiException;
use SDN3Q\Exception\NoApiKey;
use SDN3Q\Exception\NoContent;

class BaseRequest {
	public static $apiVersion = '2';
	public static $apiKey     = null;

	const API_PROTOCOL = 'https';
	const API_BASE_URL = 'sdn.3qsdn.com/api';
	private static   $client   = null;
	protected static $response = null;

	protected static $subUrl           = '';
	protected static $additionalHeader = []; //additional http header
	protected static $requestParm      = []; //parameter to send via json
	protected static $possibleParm     = []; //possible parameter that could be filled
	protected static $endpoint         = null;
	protected static $method           = 'get'; //http method
	protected static $useApiKey        = true; //use api key (true) or use user/passwort (false)
	public static    $userName         = null;
	public static    $userPassword     = null;

	/**
	 * BaseRequest constructor.
	 *
	 * @param string $apiKey
	 * @param int    $apiVersion
	 */
	function __construct( $apiKey = null, $apiVersion = 2 ) {
		self::$client     = new \GuzzleHttp\Client();
		self::$apiKey     = $apiKey;
		self::$apiVersion = $apiVersion;
	}

	/**
	 * Build Base URL for API
	 * @return string
	 */
	private function apiBaseUrl() {
		return self::API_PROTOCOL . '://' . self::API_BASE_URL . '/v' . self::$apiVersion . '';
	}

	/**
	 * Build complete URL for Api Endpoint
	 * @return string
	 */
	private function apiUrlRequest() {
		$url = [ self::apiBaseUrl() ];

		if ( ! empty( static::$endpoint ) ) {
			$url[] = static::$endpoint;
		}
		if ( ! empty( static::$subUrl ) ) {
			$url[] = static::$subUrl;
		}

		return implode( '/', $url );
	}

	/**
	 * Build API Header
	 *
	 * @return array
	 * @throws NoApiKey
	 */
	private function apiHeader() {
		try {
			if ( self::$useApiKey ) {
				return self::apiKeyHeader();
			} else {
				return self::apiLoginHeader();
			}
		} catch ( \Exception $e ) {
			throw $e;
		}
	}

	/**
	 * @return array
	 * @throws NoApiKey
	 */
	private function apiKeyHeader() {
		if ( empty( self::$apiKey ) ) {
			throw new \SDN3Q\Exception\NoApiKey();
		}

		$header = [ 'X-AUTH-APIKEY' => self::$apiKey ];

		return $header;
	}


	private function apiLoginHeader() {
		if ( empty( self::$userName ) ) {
			throw new \SDN3Q\Exception\NoUserName();
		}
		if ( empty( self::$userName ) ) {
			throw new \SDN3Q\Exception\NoUserPassword();
		}

		$header = [ 'X-AUTH-USERNAME' => self::$userName, 'X-AUTH-PASSWD' => self::$userPassword ];

		return $header;
	}

	/**
	 * @return array
	 * @throws \Exception
	 */
	private function buildHeader() {
		try {
			return array_merge( self::$additionalHeader, self::apiHeader() );
		} catch ( \Exception $e ) {
			throw $e;
		}

	}

	/**
	 * Build Parm for Request
	 * @return array
	 */
	private function buildReqeustParm() {
		$parms = [];
		foreach ( static::$possibleParm AS $key ) {
			if ( isset( static::$requestParm[ $key ] ) && ! empty( static::$requestParm[ $key ] ) ) {
				$parms[ $key ] = static::$requestParm[ $key ];
			}
		}

		return $parms;
	}

	protected function getResponse() {
		try {
			$url = self::apiUrlRequest();

			$request  = new \GuzzleHttp\Psr7\Request( strtoupper( self::$method ), $url );
			$response = self::$client->send( $request, [
				'json'    => static::$requestParm,
				'headers' => self::buildHeader(),
			] );
			self::checkStatusCode( $response->getStatusCode() );
			self::$response = $response->getBody()->getContents();

			return self::$response;

		} catch ( \GuzzleHttp\Exception\RequestException $e ) {
			$errorResponse = json_decode( $e->getResponse()->getBody( true )->getContents(), true );
			throw new ApiException( $errorResponse['message'], $e->getResponse()->getStatusCode() );
		} catch ( \Exception $e ) {
			throw $e;
		}

	}

	private function checkStatusCode( $statusCode ) {
		if ( $statusCode == 204 ) {
			throw new NoContent();
		}

	}
}