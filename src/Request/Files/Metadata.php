<?php
namespace SDN3Q\Request\Files;
use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Model\FileMetadata;
use SDN3Q\Request\BaseRequest;

class Metadata extends BaseRequest{
	protected static $endpoint ='projects';

	/**
	 * Return Metadata of a File
	 *
	 * @param int $projectId
	 * @param int $fileId
	 *
	 * @return FileMetadata|null
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function getMetadata(int $projectId,int $fileId){
		$fileMeta = null;
		parent::$subUrl     = $projectId . '/files/' . $fileId . '/metadata';
		try {
			$mapper   = new ObjectMapper(new JsonSerializer());;
			$response = self::getResponse();
			$data     = json_decode($response, true);
			$fileMeta     = $mapper->map(json_encode($data), FileMetadata::class);
			return $fileMeta;

		} catch (\Exception $e) {
			throw $e;
		}
		return $fileMeta;
	}

	/**
	 * Change Metadata of a File
	 *
	 * @param int $projectId
	 * @param int   $fileId
	 * @param array $parms
	 *
	 * @return FileMetadata|null
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function changeMetadata(int $projectId,int $fileId, $parms = []){
		$fileMeta = null;
		parent::$subUrl     = $projectId . '/files/' . $fileId . '/metadata';
		self::$method              = 'put';
		parent::$requestParmAsJson = true;
		self::$possibleParm = [
			'Title',//	string	true		Title
			'DisplayTitle',//	string	false		Display Title (Line 1)
			'DisplayTitleSecondLine',//	string	false		Display Title (Line 2)
			'Description',//	string	true		Description
			'Tags',//	string	false		Tags
			'Genre',//	string	false		Genre
			'Series',//	string	false		Series
			'NativeLanguage',//	string	false		Language
			'Source',//	string	false		Source
			'Studio',//	string	false		Studio
			'Licensor',//	string	false		Licensee
			'Licensearea',//	string	false		License Area
			'ProductionCountry',//	string	false		Country of Production
			'Relationship',//	string	false		Relation
			'ProgramId',//	string	false		Program-Id
			'IsPublicAt',//	datetime	false		Release from (Date)
			'IsPublicUntil',//	datetime	false		Release from (Date)
			'Lat',//	float	false		Latitude
			'Lang'//
		];
		foreach ($parms AS $key => $value) {
			self::$requestParm[$key] = $value;
		}

		try {
			$mapper   = new ObjectMapper(new JsonSerializer());;
			$response = self::getResponse();
			$data     = json_decode($response, true);
			$fileMeta     = $mapper->map(json_encode($data), FileMetadata::class);
			return $fileMeta;

		} catch (\Exception $e) {
			throw $e;
		}
		return $fileMeta;

	}
}
