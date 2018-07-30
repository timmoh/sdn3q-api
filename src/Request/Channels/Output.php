<?php

namespace SDN3Q\Request\Channels;

use SDN3Q\Request\BaseRequest;


class Output extends BaseRequest {
	protected static $endpoint = 'channels';

	/**
	 * Return Output URIs of a Channel
	 *
	 * @param int $channelId
	 *
	 * @return array
	 * @throws \Exception
	 */
	public static function getOutput( int $channelId ) {
		$channelOutputURIs = [];
		parent::$subUrl    = $channelId . '/output';
		try {

			$response = self::getResponse();
			$data     = json_decode( $response, true );
			foreach ( $data as $value ) {
				$channelOutputURIs[] = $value;
			}
		} catch ( \Exception $e ) {
			throw $e;
		}


		return $channelOutputURIs;
	}
}
