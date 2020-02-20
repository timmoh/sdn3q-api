<?php

namespace SDN3Q\Request\Channels;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Model\TimeshiftWindowDimensions;
use SDN3Q\Request\BaseRequest;

class Timeshift2Vod extends BaseRequest {

	protected static $endpoint = 'channels';

	/**
	 * Get the Timeshift2Vod window
	 *
	 * @param int $channelId
	 *
	 * @return TimeshiftWindowDimensions
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function getTimeshift2VodWindow(int $channelId) {
		parent::$subUrl = $channelId . '/timeshift2vod/timeshiftwindow';

		try {
			$mapper   = new ObjectMapper(new JsonSerializer());
			$response = json_decode(self::getResponse());

			return $mapper->map(json_encode($response->TimeshiftWindowDimensions), TimeshiftWindowDimensions::class);
		} catch (\Exception $e) {
			throw $e;
		}
	}

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
