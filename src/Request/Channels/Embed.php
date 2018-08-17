<?php

namespace SDN3Q\Request\Channels;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Enum\PlayoutState;
use SDN3Q\Model\EmbedCodes;
use SDN3Q\Request\BaseRequest;

class Embed extends BaseRequest {

	protected static $endpoint = 'channels';

	/**
	 * Return the Embed Codes of a Channel
	 *
	 * @param int   $channelId
	 * @param array $parms
	 *
	 * @return EmbedCodes
	 * @throws \Exception
	 */
	public static function getEmbed(int $channelId, $parms = []) {
		self::$requestParmAsJson  = false;
		self::$requestParmAsQuery = true;
		parent::$subUrl           = $channelId . '/embed';
		self::$possibleParm       = [
			'ContainerId', //string ID of player DIV tag
			'Width', //integer		Player width
			'Height', //integer		Player height
			'OverrideSettings', //boolean		Overrides the specified settings by embed code
			'Autostart', //boolean		Start playback automatically
			'Popover', //boolean		Show player as popover
			'ActivateAds', //boolean		Enable advertising
			'VASTID', //integer		AdTag Id
		];

		foreach ($parms AS $key => $value) {
			self::$requestParm[$key] = $value;
		}

		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();

			$data  = json_decode($response, true);
			$embed = $mapper->mapJson(json_encode($data['ChannelEmbedCodes']), EmbedCodes::class);
			return $embed;
		} catch (\Exception $e) {
			throw $e;
		}
	}

	/**
	 * Return the Playout State of Channels Embed Code
	 *
	 * @param int $channelId
	 *
	 * @return \SDN3Q\Enum\PlayoutState
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function getEmbedState(int $channelId) {
		parent::$subUrl = $channelId . '/embedstate';
		try {
			$response = self::getResponse();

			$data = json_decode($response, true);

			return constant('SDN3Q\Enum\PlayoutState::' . strtoupper($data['PlayoutState']));
		} catch (\Exception $e) {
			throw $e;
		}
	}

	/**
	 * Change Playout State of Channels Embed Code
	 *
	 * @param int          $channelId
	 * @param PlayoutState $playoutState
	 *
	 * @return \SDN3Q\Enum\PlayoutState
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function changeEmbedState(int $channelId, PlayoutState $playoutState) {
		parent::$subUrl     = $channelId . '/embedstate';
		self::$possibleParm = [
			'PlayoutState', //sState of Channel Embed Code
		];

		try {
			self::$requestParm['PlayoutState'] = $playoutState;
			$response                          = self::getResponse();
			$data                              = json_decode($response, true);
			return constant('SDN3Q\Enum\PlayoutState::' . strtoupper($data['PlayoutState']));
		} catch (\Exception $e) {
			throw $e;
		}
	}
}

