<?php

namespace SDN3Q\Request\Channels;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Model\ChannelInput;
use SDN3Q\Request\BaseRequest;

class Input extends BaseRequest {

	protected static $endpoint = 'channels';

	/**
	 * Return Input of a Channel
	 *
	 * @param int $channelId
	 *
	 * @return ChannelInput
	 * @throws \Exception
	 */
	public static function getInput(int $channelId) {
		parent::$subUrl = $channelId . '/input';
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$input    = $mapper->mapJson($response, ChannelInput::class);

		} catch (\Exception $e) {
			throw $e;
		}

		return $input;
	}

	/**
	 * Change Channel Input
	 *
	 * @param int         $channelId
	 * @param string      $streamInType
	 * @param string|null $streamInUri
	 * @param bool        $useIngestVersion2
	 *
	 * @return ChannelInput
	 * @throws \Exception
	 */
	public static function changeInput(int $channelId, string $streamInType, bool $useIngestVersion2 = false, string $streamInUri = null) {
		parent::$subUrl     = $channelId . '/input';
		self::$method       = 'put';
		self::$possibleParm = [
			'StreamInType',
			'StreamInURI',
			'UseIngestVersion2',
		];
		try {
			self::$requestParm['StreamInType']      = $streamInType;
			self::$requestParm['StreamInURI']       = $streamInUri;
			self::$requestParm['UseIngestVersion2'] = $useIngestVersion2;
			$mapper                                 = new ObjectMapper();
			$response                               = self::getResponse();
			$input                                  = $mapper->mapJson($response, ChannelInput::class);

		} catch (\Exception $e) {
			throw $e;
		}

		return $input;

	}
}

