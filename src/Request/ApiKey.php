<?php

namespace SDN3Q\Request;

class ApiKey extends BaseRequest {
	protected static $endpoint = 'apikey';

	/**
	 * Get ApiKey
	 * @return array
	 * @throws \Exception
	 */
	public static function getApiKey() {
		$data = [];
		self::$useApiKey = false;
		try {
			$response = self::getResponse();
			$data     = json_decode( $response, true );
		} catch ( \Exception $e ) {
			throw $e;
		}

		return $data;
	}

	/**
	 * Delete ApiKey
	 * @return array
	 * @throws \Exception
	 */
	public static function deleteApiKey() {
		self::$method = 'delete';
		self::$useApiKey = false;
		$data = [];
		try {
			$response = self::getResponse();
			$data     = json_decode( $response, true );
		} catch ( \Exception $e ) {
			throw $e;
		}

		return $data;
	}
}