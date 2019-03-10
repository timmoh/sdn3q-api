<?php

namespace SDN3Q\Request\Projects;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Model\Project;
use SDN3Q\Request\BaseRequest;

class Projects extends BaseRequest {

	protected static $endpoint = 'projects';

	/**
	 * Return a collection of available Projects
	 *
	 * @return Project[]|null
	 * @throws \Exception
	 */
	public static function getProjects() {
		$projects = [];
		try {
			$mapper   = new ObjectMapper(new JsonSerializer());;
			$response = self::getResponse();
			$data     = json_decode($response, true);
			if (count($data['Projects']) > 0) {
				foreach ($data['Projects'] as $dataProject) {
					$projects[] = $mapper->map(json_encode($dataProject), Project::class);
				}
			}
		} catch (\Exception $e) {
			throw $e;
		}

		return $projects;
	}

	/**
	 * Return Project
	 *
	 * @param int $projectId
	 *
	 * @return Project|null
	 * @throws \Exception
	 */
	public static function getProject(int $projectId) {
		$project = null;
		try {
			$mapper         = new ObjectMapper(new JsonSerializer());;
			parent::$subUrl = $projectId;

			$response = self::getResponse();
			$project  = $mapper->map($response, Project::class);
		} catch (\Exception $e) {
			throw $e;
		}

		return $project;
	}

	/**
	 * Create a new Project
	 *
	 * @param string $label
	 * @param int    $streamTypeId
	 *
	 * @return int|null
	 * @throws \Exception
	 */
	public static function postProject(string $label, int $streamTypeId) {
		self::$method       = 'post';
		self::$possibleParm = ['label', 'streamTypeId'];
		$projectId          = null;
		try {

			self::$requestParm['label']        = $label;
			self::$requestParm['streamTypeId'] = $streamTypeId;

			$response  = self::getResponse();
			$json      = json_decode($response, true);
			$projectId = $json['ProjectId'];
		} catch (\Exception $e) {
			throw $e;
		}

		return $projectId;

	}

	/**
	 * Delete a Project by Id
	 *
	 * @param int $projectId
	 *
	 * @return bool|null
	 * @throws \Exception
	 */
	public static function deleteProject(int $projectId) {
		self::$method = 'delete';
		try {
			parent::$subUrl = $projectId;
			$response       = self::getResponse();
		} catch (\Exception $e) {
			throw $e;
		}
		return true;
	}

	/**
	 * Change proprties of Project
	 *
	 * @param int    $projectId
	 * @param string $label
	 * @param bool   $tokenSecurity
	 *
	 * @return bool|null
	 * @throws \Exception
	 */
	public static function putProject(int $projectId, string $label, bool $tokenSecurity = false) {
		self::$method = 'put';
		try {
			parent::$subUrl = $projectId;

			self::$requestParm['label']         = $label;
			self::$requestParm['TokenSecurity'] = $tokenSecurity;
			$response                           = self::getResponse();
		} catch (\Exception $e) {
			throw $e;
		}
		return true;
	}

	/**
	 * get Channel Id
	 *
	 * @param int $projectId
	 *
	 * @return int|null
	 * @throws \Exception
	 */
	public static function getChannelId(int $projectId) {
		$channelId = null;

		$request = new \SDN3Q\Request\Channels\Channels(self::$client);

		$channels = $request::getChannels();

		foreach ($channels AS $channel) {
			if ($projectId == $channel->project->id) {
				$channelId = $channel->id;
			}
		}
		return $channelId;
	}
}



