<?php

namespace SDN3Q\Request\Projects;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Model\Bandwidth;
use SDN3Q\Request\BaseRequest;

class ProjectFileUsage extends BaseRequest {

	protected static $endpoint = 'project';

	public static function getUsage(int $projectId, int $fileId, $parms = []) {
		$usage                    = [];
		self::$requestParmAsJson  = false;
		self::$requestParmAsQuery = true;

		try {
			$mapper = new ObjectMapper(new JsonSerializer());

			parent::$subUrl = $projectId . '/bandwidth/' . $fileId;

			self::$possibleParm = [
				'Resolution', //[hour|day|week|month|year]
				'FromDate', //{Date YYYY-MM-DD}
				'UntilDate', //{Date YYYY-MM-DD}
				'Timezone', //e.g.: 'Europe/Berlin', 'Europe/Paris'
				'PageSize', //integer
				'Page', //integer
				'Order' //array
			];

			foreach ($parms as $key => $value) {
				self::$requestParm[$key] = $value;
			}

			$response = self::getResponse();
			$data     = json_decode($response, true);
			$usage    = $mapper->map(json_encode($data), Bandwidth::class);

		} catch (\Exception $e) {
			throw $e;
		}

		return $usage;
	}

}
