<?php

namespace SDN3Q\Request\Channels;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Model\ChannelTranscoderFormat;
use SDN3Q\Request\BaseRequest;


class Transcoder extends BaseRequest {
	protected static $endpoint = 'channels';


	/**
	 * Return available Channel Transcoder Formats
	 *
	 * @param int $channelId
	 *
	 * @return array
	 * @throws \Exception
	 */
	public static function getFormats( int $channelId ) {
		$channelFormats = [];
		parent::$subUrl = $channelId . '/formats';
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$data = json_decode( $response, true );
			if ( count( $data['ChannelFormats'] ) > 0 ) {
				foreach ( $data['ChannelFormats'] as $dataValue ) {
					$channelFormats[] = $mapper->mapJson( json_encode( $dataValue ), ChannelTranscoderFormat::class );
				}
			}
		} catch ( \Exception $e ) {
			throw $e;
		}


		return $channelFormats;
	}

	/**
	 * Add (link) a ChannelFormat to a Channel and create a new Transcoder
	 *
	 * @param int $channelId
	 * @param int $channelFormatId
	 *
	 * @return array
	 * @throws \Exception
	 */
	public static function linkFormat( int $channelId, int $channelFormatId ) {
		$channelFormats = [];
		parent::$subUrl = $channelId . '/formats/' . $channelFormatId;
		self::$method   = 'link';
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$data     = json_decode( $response, true );
			if ( count( $data['ChannelTranscoders'] ) > 0 ) {
				foreach ( $data['ChannelTranscoders'] as $dataValue ) {
					$channelFormats[] = $mapper->mapJson( json_encode( $dataValue ), ChannelTranscoderFormat::class );
				}
			}

		} catch ( \Exception $e ) {
			throw $e;
		}


		return $channelFormats;
	}

	/**
	 *  Remove (unlink) a ChannelFormat from a Channel and remove the Transcoder
	 *
	 * @param int $channelId
	 * @param int $channelFormatId
	 *
	 * @return array
	 * @throws \Exception
	 */
	public static function unlinkFormat( int $channelId, int $channelFormatId ) {
		$channelFormats     = [];
		parent::$subUrl     = $channelId . '/formats/' . $channelFormatId;
		self::$method       = 'unlink';
		self::$possibleParm = [
			'ChannelId',
			'ChannelFormatId',
		];
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$data     = json_decode( $response, true );
			if ( count( $data['ChannelTranscoders'] ) > 0 ) {
				foreach ( $data['ChannelTranscoders'] as $dataValue ) {
					$channelFormats[] = $mapper->mapJson( json_encode( $dataValue ), ChannelTranscoderFormat::class );
				}
			}

		} catch ( \Exception $e ) {
			throw $e;
		}


		return $channelFormats;

	}


	/**
	 * Return enabled Channel Transcoders
	 *
	 * @param int $channelId
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	public static function getTranscoder( int $channelId ) {
		$channelFormats = [];
		parent::$subUrl = $channelId . '/transcoders';
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$data     = json_decode( $response, true );
			if ( count( $data['ChannelTranscoders'] ) > 0 ) {
				foreach ( $data['ChannelTranscoders'] as $dataValue ) {
					$channelFormats[] = $mapper->mapJson( json_encode( $dataValue ), ChannelTranscoderFormat::class );
				}
			}
		} catch ( \Exception $e ) {
			throw $e;
		}


		return $channelFormats;
	}
}
