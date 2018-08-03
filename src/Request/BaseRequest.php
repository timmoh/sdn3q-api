<?php

namespace SDN3Q\Request;


use SDN3Q\Client;
use SDN3Q\Exception\ApiException;
use SDN3Q\Exception\NoApiKey;
use SDN3Q\Exception\NoContent;

class BaseRequest {

	private static   $httpclient = null;
	protected static $response   = null;

   /**
    * @var \SDN3Q\Client
    */
   protected static $client           = null;


	protected static $subUrl           = '';
	protected static $additionalHeader = []; //additional http header
	protected static $requestParm      = []; //parameter to send via json
	protected static $possibleParm     = []; //possible parameter that could be filled
	protected static $endpoint         = null;
	protected static $method           = 'get'; //http method




   /**
    * BaseRequest constructor.
    *
    * @param \SDN3Q\Client  $client
    */
	function __construct( \SDN3Q\Client  $client ) {
      self::$client = $client;
		self::$httpclient = new \GuzzleHttp\Client();
	}

	/**
	 * Build Base URL for API
	 * @return string
	 */
	private function apiBaseUrl() {
		return self::$client->apiProtocol . '://' . self::$client->baseUrl . '/v' .self::$client->apiVersion . '';
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
	 * @return array
	 * @throws \Exception
	 */
	private function buildHeader() {
		try {
			return array_merge( self::$additionalHeader, self::$client->apiHeader() );
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
			$response = self::$httpclient->send($request, [
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