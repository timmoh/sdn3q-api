<?php

namespace SDN3Q\Request;

use MintWare\JOM\ObjectMapper;

class Welcome extends BaseRequest {
	protected static $endpoint = '';

	/**
	 * Test Connection
	 */
	public static function textConnection() {
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