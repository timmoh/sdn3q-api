<?php

namespace SDN3Q\Request\Projects;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Model\FileUsage;
use SDN3Q\Request\BaseRequest;

class ProjectUsageFileList extends BaseRequest
{

    protected static $endpoint = 'project';

    public static function getUsage(int $projectId, $parms = [])
    {
        $list = [];
        self::$requestParmAsJson = false;
        self::$requestParmAsQuery = true;

        try {
            $mapper = new ObjectMapper(new JsonSerializer());

            parent::$subUrl = $projectId . '/bandwidth/filelist';

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
            $data = json_decode($response, true);
            if (count($data['Data']) > 0) {
                foreach ($data['Data'] as $fileId => $fileData) {
                    $list[$fileId] = $mapper->map(json_encode($fileData), FileUsage::class);
                }
            }
        } catch (\Exception $e) {
            throw $e;
        }

        return $list;
    }

}
