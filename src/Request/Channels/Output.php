<?php

namespace SDN3Q\Request\Channels;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Request\BaseRequest;


class Output extends BaseRequest {
	protected static $endpoint = 'channels';

	/**
	 * Return Output URIs of a Channel
	 *
	 * @param $channelId
	 *
	 * @return array
	 * @throws \Exception
	 */
	public static function getOutput( $channelId ) {
		$channelOutputURIs = [];
		try {
			parent::$subUrl = $channelId . '/output';
			$response = self::getResponse();
			$data = json_decode( $response, true );
			foreach ( $data as $value ) {
				$channelOutputURIs[] = $value;
			}
		} catch ( \Exception $e ) {
			throw $e;
		}


		return $channelOutputURIs;
	}
}
