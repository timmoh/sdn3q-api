<?php

namespace SDN3Q\Request\Files;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Model\FilePicture;
use SDN3Q\Request\BaseRequest;

class Picture extends BaseRequest {

	protected static $endpoint = 'projects';
	use \SDN3Q\Request\UploadRequest;

	/**
	 * Return Pictures of a file
	 *
	 * @param int $projectId
	 * @param int $fileId
	 *
	 * @return FilePicture[]|null
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function getPictures(int $projectId, int $fileId) {
		parent::$subUrl = $projectId . '/files/' . $fileId . '/pictures';
		$filePictures   = [];
		try {
			$mapper = new ObjectMapper(new JsonSerializer());;
			$response = self::getResponse();
			$data     = json_decode($response, true);
			if (count($data['FilePictures']) > 0) {
				foreach ($data['FilePictures'] as $dataFiles) {
					$filePictures[] = $mapper->map(json_encode($dataFiles), FilePicture::class);
				}
			}

		} catch (\Exception $e) {
			throw $e;
		}

		return $filePictures;
	}

	/**
	 * Create a new FilePicture and set it as Standard Picture
	 *
	 * @param int    $projectId
	 * @param int    $fileId
	 * @param string $imagePath
	 *
	 * @return FilePicture|null
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function postPicture(int $projectId, int $fileId, string $imagePath) {
		self::$method                = 'post';
		parent::$subUrl              = $projectId . '/files/' . $fileId . '/pictures';
		self::$allowedUploadMimeType = ['image/jpeg', 'image/png'];
		$picture                     = null;
		try {

			$mime = self::checkMimeType($imagePath);

			self::$additionalHeader["Content-type"] = $mime;

			$mapper = new ObjectMapper(new JsonSerializer());;
			$response = self::getResponse();
			$picture  = $mapper->map($response, FilePicture::class);
			return $picture;
		} catch (\Exception $e) {
			throw $e;
		}
		return $picture;
	}

	/**
	 * Return the standard (default) Picture of a file
	 *
	 * @param int $projectId
	 * @param int $fileId
	 *
	 * @return FilePicture|null
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function getPictureDefault(int $projectId, int $fileId) {
		parent::$subUrl = $projectId . '/files/' . $fileId . '/pictures/standard';
		$filePicture    = null;
		try {
			$mapper = new ObjectMapper(new JsonSerializer());;
			$response    = self::getResponse();
			$filePicture = $mapper->map($response, FilePicture::class);
		} catch (\Exception $e) {
			throw $e;
		}

		return $filePicture;

	}

	/**
	 * Delete this FilePicture
	 *
	 * @param int $projectId
	 * @param int $fileId
	 * @param int $filePictureId
	 *
	 * @return FilePicture|null
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function deletePicture(int $projectId, int $fileId, int $filePictureId) {
		self::$method   = 'delete';
		parent::$subUrl = $projectId . '/files/' . $fileId . '/pictures/' . $filePictureId . '';
		$filePicture    = null;
		try {
			$mapper = new ObjectMapper(new JsonSerializer());;
			$response    = self::getResponse();
			$filePicture = $mapper->map($response, FilePicture::class);
		} catch (\Exception $e) {
			throw $e;
		}

		return $filePicture;
	}

	/**
	 * Set this as Standard (default) FilePicture
	 *
	 * @param int $projectId
	 * @param int $fileId
	 * @param int $filePictureId
	 *
	 * @return FilePicture|null
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function putPicture(int $projectId, int $fileId, int $filePictureId) {
		self::$method   = 'put';
		parent::$subUrl = $projectId . '/files/' . $fileId . '/pictures/' . $filePictureId . '/standard';
		$filePicture    = null;
		try {
			$mapper = new ObjectMapper(new JsonSerializer());;
			$response    = self::getResponse();
			$filePicture = $mapper->map($response, FilePicture::class);
		} catch (\Exception $e) {
			throw $e;
		}

		return $filePicture;
	}

}