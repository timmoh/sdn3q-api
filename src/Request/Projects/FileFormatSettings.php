<?php

namespace SDN3Q\Request\Projects;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Request\BaseRequest;

class FileFormatSettings extends BaseRequest {

	protected static $endpoint = 'projects';

	/**
	 * Return all global FileFormatSettings of a Video on Demand Project
	 *
	 * @param int $projectId
	 *
	 * @return FileFormatSettings[]|null
	 * @throws \Exception
	 */
	public static function getFileFormatSettings(int $projectId) {
		$fileformatsettings = [];
		parent::$subUrl = $projectId . '/fileformatsettings';
		try {
			$mapper         = new ObjectMapper();


			$response = self::getResponse();

			$data = json_decode($response, true);
			if (count($data['FileFormatSettings']) > 0) {
				foreach ($data['FileFormatSettings'] as $dataValue) {
					$fileformatsettings[] = $mapper->mapJson(json_encode($dataValue), \SDN3Q\Model\FileFormatSettings::class);
				}
			}
		} catch (\Exception $e) {
			throw $e;
		}

		return $fileformatsettings;
	}

	/**
	 *  Return a FileFormatSetting of a Video on Demand Project
	 *
	 * @param int $projectId
	 * @param int $fileFormatId
	 *
	 * @return FileFormatSettings|null
	 * @throws \Exception
	 */
	public static function getFileEncoderSetting(int $projectId, int $fileFormatId) {
		$fileformatsetting = null;
		parent::$subUrl = $projectId . '/fileformatsettings/' . $fileFormatId;
		try {
			$mapper         = new ObjectMapper();


			$response          = self::getResponse();
			$fileformatsetting = $mapper->mapJson($response, \SDN3Q\Model\FileFormatSettings::class);
		} catch (\Exception $e) {
			throw $e;
		}

		return $fileformatsetting;
	}

	/**
	 * @param int   $projectId
	 * @param int   $fileFormatId
	 * @param array $parms
	 *
	 * @return FileFormatSettings|null
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function putFileEncoderSetting(int $projectId, int $fileFormatId, $parms = []) {
		parent::$subUrl = $projectId . '/fileformatsettings/' . $fileFormatId;
		$fileformatsetting  = null;
		self::$method       = 'put';
		self::$possibleParm = [
			'VideoBitRate',
			'VideoProfile',
			'VideoFPS',
			'AudioBitRate',
			'AudioSampleRate',
			'AudioChannels',
		];
		foreach ($parms AS $key => $value) {
			self::$requestParm[$key] = $value;
		}
		try {
			$mapper             = new ObjectMapper();
			self::$requestParm['projectId']    = $projectId;
			self::$requestParm['FileFormatId'] = $fileFormatId;

			$response = self::getResponse();
			$fileformatsetting = $mapper->mapJson($response, \SDN3Q\Model\FileFormatSettings::class);

		} catch (\Exception $e) {
			throw $e;
		}


		return $fileformatsetting;
	}

}
