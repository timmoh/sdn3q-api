<?php

namespace SDN3Q\Request;


use SDN3Q\Exception\ApiException;
use SDN3Q\Exception\NoApiKey;

class BaseRequest {
	public static $apiVersion = '2';
	public static $apiKey     = null;

	const API_PROTOCOL = 'https';
	const API_BASE_URL = 'sdn.3qsdn.com/api';
	private static   $client   = null;
	protected static $response = null;

	protected static $subUrl      = '';
	protected static $requestParm = [];
	protected static $endpoint    = null;
	protected static $method      = 'get';

	function __construct( $apiKey = null, $apiVersion = 2 ) {
		self::$client     = new \GuzzleHttp\Client();
		self::$apiKey     = $apiKey;
		self::$apiVersion = $apiVersion;
	}

	private function apiBaseUrl() {
		return self::API_PROTOCOL . '://' . self::API_BASE_URL . '/v' . self::$apiVersion . '';
	}

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

	private function apiHeader() {
		if ( empty( self::$apiKey ) ) {
			throw new NoApiKey();
		}

		$header = [ 'X-AUTH-APIKEY' => self::$apiKey ];

		return $header;
	}

	private function buildReqeustParm() {

		return json_encode( static::$requestParm );
	}

	protected function getResponse() {
		try {
			$url = self::apiUrlRequest();

			$request        = new \GuzzleHttp\Psr7\Request( strtoupper( self::$method ), $url );
			$response       = self::$client->send( $request, [
				'json'    => static::$requestParm,
				'headers' => self::apiHeader(),
			] );
			self::$response = $response->getBody()->getContents();


			return self::$response;

		} catch ( \GuzzleHttp\Exception\RequestException $e ){
			$errorResponse = json_decode( $e->getResponse()->getBody( true )->getContents() , true );
			throw new ApiException( $errorResponse['message'], $e->getResponse()->getStatusCode() );
		}

}


private
function checkResponse( $response ) {
	//if ( $e->getResponse()->getStatusCode() == '400' ) {
}

/**
 * @param $e
 *
 * @deprecated
 * @return mixed
 * @throws ApiException
 */
public
function StatusCodeHandling( $e ) {
	if ( $e->getResponse()->getStatusCode() == '400' ) {
		$response = json_decode( $e->getResponse()->getBody( true )->getContents() );
		throw new ApiException( $response[ message ] );

	} elseif ( $e->getResponse()->getStatusCode() == '422' ) {
		$response = json_decode( $e->getResponse()->getBody( true )->getContents() );

		return $response;
	} elseif ( $e->getResponse()->getStatusCode() == '500' ) {
		$response = json_decode( $e->getResponse()->getBody( true )->getContents() );

		return $response;
	} elseif ( $e->getResponse()->getStatusCode() == '401' ) {
		$response = json_decode( $e->getResponse()->getBody( true )->getContents() );

		return $response;
	} elseif ( $e->getResponse()->getStatusCode() == '403' ) {
		$response = json_decode( $e->getResponse()->getBody( true )->getContents() );

		return $response;
	} else {
		$response = json_decode( $e->getResponse()->getBody( true )->getContents() );
		throw new ApiException( $response[ message ] );
	}
}
}