<?php

namespace SDN3Q\Request\Channels;

use SDN3Q\Request\BaseRequest;

class Timeshift2Vod extends BaseRequest {

	protected static $endpoint = 'channels';

	/**
	 * Create a new Timeshift2Vod
	 *
	 * @param int   $channelId
	 * @param int   $vodProjectId
	 * @param array $params
	 *
	 * @return int File ID
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function postTimeshift2Vod(int $channelId, int $vodProjectId, array $params = []) {
		parent::$subUrl     = $channelId . '/timeshift2vod/' . $vodProjectId;
		self::$method       = 'post';
		self::$requiredParm = ['Start', 'End'];

		foreach ($params AS $key => $value) {
			self::$requestParm[$key] = $value;
		}

		try {
			$response = self::getResponse();
			$json     = json_decode($response, true);

			if ($json && isset($json['Id'])) {
				return (int)$json['Id'];
			} else {
				return 0;
			}
		} catch (\Exception $e) {
			throw $e;
		}
	}

}
