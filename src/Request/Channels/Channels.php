<?php

namespace SDN3Q\Request\Channels;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Model\Channel;
use SDN3Q\Request\BaseRequest;

class Channels extends BaseRequest {

	protected static $endpoint = 'channels';

	/**
	 * Return a collection of available Channels
	 *
	 * @return Channel[]|array
	 * @throws \Exception
	 */
	public static function getChannels() {
		$channels = [];
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$data     = json_decode($response, true);
			if (count($data['Channels']) > 0) {
				foreach ($data['Channels'] as $dataProject) {
					$channels[] = $mapper->mapJson(json_encode($dataProject), Channel::class);
				}
			}
		} catch (\Exception $e) {
			throw $e;
		}

		return $channels;
	}

	/**
	 * Return a Channel
	 *
	 * @param int $channelId
	 *
	 * @return \SDN3Q\Model\Channel|null
	 * @throws \Exception
	 */
	public static function getChannel(int $channelId) {
		$channel        = null;
		parent::$subUrl = $channelId;
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();

			$channel = $mapper->mapJson($response, Channel::class);
		} catch (\Exception $e) {
			throw $e;
		}

		return $channel;
	}
}
