<?php

namespace SDN3Q\Request\Projects;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Model\ProjectUsage;
use SDN3Q\Request\BaseRequest;

class Usage extends BaseRequest {

	protected static $endpoint = 'projects';

	public static function getUsage(int $projectId, $parms = []) {
		$usage                    = [];
		self::$requestParmAsJson  = false;
		self::$requestParmAsQuery = true;

		try {
			$mapper = new ObjectMapper(new JsonSerializer());

			parent::$subUrl = $projectId . '/usage';

			self::$possibleParm = [
				'Start', //date {Date YYYY-MM-DD} Reporting period from
				'End', //date {Date YYYY-MM-DD} Reporting period to
				'Resolution' //string [month|day] Detail of the data
			];

			foreach ($parms as $key => $value) {
				self::$requestParm[$key] = $value;
			}

			$response = self::getResponse();

			$data = json_decode($response, true);

			if (count($data['Data']) > 0) {
				foreach ($data['Data'] as $dataUsage) {
					$usage[] = $mapper->map(json_encode($dataUsage), ProjectUsage::class);
				}
			}
		} catch (\Exception $e) {
			throw $e;
		}

		return $usage;
	}

}
