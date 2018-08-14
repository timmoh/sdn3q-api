<?php

namespace SDN3Q\Request\Files;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Model\File;
use SDN3Q\Request\BaseRequest;

class Files extends BaseRequest {

	protected static $endpoint = 'projects';

	/**
	 * Return a collection of Files in Project.
	 *
	 * @param int   $projectId
	 * @param array $parms
	 *
	 * @return File[]|array
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function getFiles(int $projectId, $parms = []) {
		$files              = [];
		parent::$subUrl     = $projectId . '/files';
		self::$possibleParm = [
			'IncludeDeleted',
			//	boolean	false		Include Files that are marked as deleted
			'IncludeMetadata',
			//	boolean	false		Include File Metadata in response
			'IncludeProperties',
			//	boolean	false		Include File Properties in response
			'OrderBy',
			//	string	false	[create|lastupdate]	Order Files in response by create or last update DateTime
			'Sort',
			//	string	false	[asc|desc]	Sorting of response list
			'Period',
			//	string	false	[lasthour|lastday|lastweek|lastmonth|lastyear]	If you have choose a OrderBy criteria you can filter the response list by period
			'CategoryId',
			//	integer	false		You can filter the response list by a Category. Set the corresponding CategoryId
			'VideotypeId',
			//	integer	false		You can filter the response list by a Videotype. Set the corresponding VideotypeId
			'Offset',
			//	integer	false		Offset for Pagination
			'Limit',
			//	integer	false		Limit for Pagination
		];
		foreach ($parms AS $key => $value) {
			self::$requestParm[$key] = $value;
		}

		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$data     = json_decode($response, true);
			if (count($data['Files']) > 0) {
				foreach ($data['Files'] as $dataFiles) {
					$files[] = $mapper->mapJson(json_encode($dataFiles), File::class);
				}
			}

		} catch (\Exception $e) {
			throw $e;
		}

		return $files;
	}

	/**
	 * Return a File by Id
	 *
	 * @param int $projectId
	 * @param int $fileId
	 *
	 * @return File|null
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function getFile(int $projectId, int $fileId) {
		$file           = null;
		parent::$subUrl = $projectId . '/files/' . $fileId;
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$data     = json_decode($response, true);
			$file     = $mapper->mapJson(json_encode($data), File::class);
			return $file;

		} catch (\Exception $e) {
			throw $e;
		}
		return $file;
	}

	/**
	 * Create a new File Entity and return the File Upload URI in the Location Header
	 *
	 * @param int    $projectId  Format of the Video File
	 * @param string $fileName   original File Name
	 * @param string $fileFormat Format of the Video File ("mp4","avi","mov","webm","mp3","wav","aac")
	 *
	 * @return string|null
	 * @throws \SDN3Q\Exception\NotImplemented
	 */
	public static function postFile(int $projectId, string $fileName, string $fileFormat) {
		$uri                       = null;
		self::$method              = 'post';
		parent::$requestParmAsJson = true;
		parent::$subUrl            = $projectId . '/files';

		self::$requestParm['FileName']   = $fileName;
		self::$requestParm['FileFormat'] = $fileFormat;
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$header   = self::$responseHeader;
			$uri      = $header['Location'][0];
			return $uri;

		} catch (\Exception $e) {
			throw $e;
		}
		return $uri;
	}

	/**
	 * Delete a File by Id
	 *
	 * @param int $projectId
	 * @param int $fileId
	 *
	 * @return File|null
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function deleteFile(int $projectId, int $fileId) {
		$file           = null;
		self::$method   = 'delete';
		parent::$subUrl = $projectId . '/files/' . $fileId;
		try {
			$mapper   = new ObjectMapper();
			$response = self::getResponse();
			$data     = json_decode($response, true);
			$file     = $mapper->mapJson(json_encode($data), File::class);
			return $file;

		} catch (\Exception $e) {
			throw $e;
		}
		return $file;
	}

}

