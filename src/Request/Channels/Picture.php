<?php

namespace SDN3Q\Request\Channels;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Exception\NoContent;
use SDN3Q\Model\ChannelPicture;
use SDN3Q\Request\BaseRequest;

class Picture extends BaseRequest {

	use \SDN3Q\Request\UploadRequest;

	protected static $endpoint = 'channels';

	/**
	 * Return Channel Picture
	 *
	 * @param int $channelId
	 *
	 * @return ChannelPicture|null
	 * @throws \Exception
	 */
	public static function getPicture(int $channelId) {

		$channelPicture = null;
		try {
			$mapper = new ObjectMapper(new JsonSerializer());;
			parent::$subUrl = $channelId . '/picture';
			$response       = self::getResponse();
			$channelPicture = $mapper->map($response, ChannelPicture::class);
		} catch (NoContent $e) {
			return null;
		} catch (\Exception $e) {
			throw $e;
		}

		return $channelPicture;
	}

	/**
	 * @param int    $channelId
	 * @param string $pathToImage
	 *
	 * @return ChannelPicture|null
	 * @throws \Exception
	 */
	public static function putPicture(int $channelId, string $imagePath) {
		$channelPicture              = null;
		self::$method                = 'put';
		self::$allowedUploadMimeType = ['image/jpeg', 'image/png'];
		try {
			$mime = self::checkMimeType($imagePath);

			self::$additionalHeader["Content-type"] = $mime;
			$mapper                                 = new ObjectMapper(new JsonSerializer());;
			parent::$subUrl = $channelId . '/picture';

			$response = self::getResponse();

			$channelPicture = $mapper->map($response, ChannelPicture::class);
		} catch (\Exception $e) {
			throw $e;
		}

		return $channelPicture;
	}

}


