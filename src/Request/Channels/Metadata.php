<?php

namespace SDN3Q\Request\Channels;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Model\ChannelMetaData;
use SDN3Q\Request\BaseRequest;


class Metadata extends BaseRequest {
	protected static $endpoint = 'channels';
	use \SDN3Q\Request\UploadRequest;

	/**
	 * Return Metadata of a Channel
	 *
	 * @param int $channelId
	 *
	 * @return ChannelMetaData|null
	 * @throws \Exception
	 */
	public static function getMetadata( int $channelId ) {
		$channel        = null;
		parent::$subUrl = $channelId . '/metadata';
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$metaData = $mapper->mapJson( $response, ChannelMetaData::class );

		} catch ( \Exception $e ) {
			throw $e;
		}


		return $metaData;
	}

	/**
	 * Change Channel Metadata
	 *
	 * @param int  $channelId
	 * @param array $parms
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	public static function changeMetadata( int $channelId,array $parms = [] ) {
		self::$method       = 'put';
		self::$possibleParm = [
			'Title',
			'Description',
			'Tags',
			'DisplayTitle',
			'DisplayTitleSecondLine',
			'BoardTitle',
			'BoardTitleSecondLine',
			'CountdownEnd',
			'ShowChannelCredits',
			'ChannelCredits',
			'ChannelCreditsSecondLine',
		];
		parent::$subUrl     = $channelId . '/metadata';
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$metaData = $mapper->mapJson( $response, ChannelMetaData::class );

		} catch ( \Exception $e ) {
			throw $e;
		}
		return $metaData;
	}

	/**
	 * Put a ChannelMetadata BoardPicture
	 *
	 * @param int    $channelId
	 * @param string $imagePath
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	public static function putBoardPicture( int $channelId, string $imagePath ) {
		self::$method       = 'put';
		parent::$subUrl = $channelId . '/metadata/boardpicture';
		self::$allowedUploadMimeType = [ 'image/jpeg', 'image/png' ];
		try {

			$mime = self::checkMimeType( $imagePath );

			self::$additionalHeader["Content-type"] =$mime;

			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$metaData = $mapper->mapJson( $response, ChannelMetaData::class );

		} catch ( \Exception $e ) {
			throw $e;
		}
		return $metaData;
	}

	/**
	 * Put a ChannelMetadata CreditsPicture
	 *
	 * @param int    $channelId
	 * @param string $imagePath
	 *
	 * @return mixed
	 * @throws \Exception
	 */
	public static function putCreditsPicture( int $channelId, string $imagePath ) {
		self::$method       = 'put';
		parent::$subUrl = $channelId . '/metadata/creditspicture';
		self::$allowedUploadMimeType = [ 'image/jpeg', 'image/png' ];
		try {
			$mime = self::checkMimeType( $imagePath );

			self::$additionalHeader["Content-type"] =$mime;

			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$metaData = $mapper->mapJson( $response, ChannelMetaData::class );

		} catch ( \Exception $e ) {
			throw $e;
		}
		return $metaData;


	}
}


