<?php

namespace SDN3Q\Request\Channels;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Model\Channel;
use SDN3Q\Request\BaseRequest;

/*

GET /api/v2/channels Return a collection of available Channels
/api/v2/channels/{ChannelId}
GET /api/v2/channels/{ChannelId} Return a Channel
*/

class Channels extends BaseRequest {
	protected static $endpoint = 'channels';

	public static function getChannels() {
		$projects = [];
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$data     = json_decode( $response, true );
			if ( count( $data['Channels'] ) > 0 ) {
				foreach ( $data['Channels'] as $dataProject ) {
					print_r($dataProject);
					$projects[] = $mapper->mapJson( json_encode( $dataProject ), Channel::class );
				}
			}
		} catch ( \Exception $e ) {
			throw $e;
		}

		return $projects;
	}

	public static function getChannel( int $channelId ) {
		$channel = null;
		try {
			$mapper         = new ObjectMapper();
			parent::$subUrl = $channelId;

			$response = self::getResponse();
			print_r( $response );

			//$data    = json_decode( $response, true );
			$channel = $mapper->mapJson( $response, Channel::class );
		} catch ( \Exception $e ) {
			throw $e;
		}


		return $channel;
	}
}
