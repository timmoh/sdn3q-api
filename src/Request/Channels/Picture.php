<?php

namespace SDN3Q\Request\Channels;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Exception\NoContent;
use SDN3Q\Model\ChannelPicture;
use SDN3Q\Request\BaseRequest;

/*
PUT /api/v2/channels/{ChannelId}/picture Put a Channel Picture
*/

class Picture extends BaseRequest {
	use \SDN3Q\Request\UploadRequest;

	protected static $endpoint = 'channels';

	/**
	 * Return Channel Picture
	 *
	 * @param int $channelId
	 *
	 * @return null|ChannelPicture
	 * @throws \Exception
	 */
	public static function getPicture( int $channelId ) {

		$channel = null;
		try {
			$mapper         = new ObjectMapper();
			parent::$subUrl = $channelId . '/picture';
			$response       = self::getResponse();
			$channelPicture = $mapper->mapJson( $response, ChannelPicture::class );
		} catch ( NoContent $e ) {
			return null;
		} catch ( \Exception $e ) {
			throw $e;
		}


		return $channelPicture;
	}

	/**
	 * @param int    $channelId
	 * @param string $pathToImage
	 *
	 * @return null|ChannelPicture
	 * @throws \Exception
	 */
	public static function putPicture( int $channelId, string $imagePath ) {
		$channel                     = null;
		self::$method                = 'put';
		self::$allowedUploadMimeType = [ 'image/jpeg', 'image/png' ];
		try {
			$mime = self::checkMimeType( $imagePath );

			self::$additionalHeader["Content-type"] =$mime;
			$mapper         = new ObjectMapper();
			parent::$subUrl = $channelId . '/picture';

			$response = self::getResponse();

			$channelPicture = $mapper->mapJson( $response, ChannelPicture::class );
		} catch ( \Exception $e ) {
			throw $e;
		}


		return $channelPicture;
	}

}


