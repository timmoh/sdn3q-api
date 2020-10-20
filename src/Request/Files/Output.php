<?php

namespace SDN3Q\Request\Files;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Model\FileOutputURI;
use SDN3Q\Request\BaseRequest;

class Output extends BaseRequest
{
    protected static $endpoint = 'projects';

    /**
     * Return Output URIs of a file
     *
     * @param int $projectId
     * @param int $fileId
     *
     * @return FileOutputURI[]|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function getOutput(int $projectId, int $fileId)
    {
        $fileOutputURIs = [];
        parent::$subUrl = $projectId . '/files/' . $fileId . '/output';

        try {
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $data = json_decode($response, true);
            if (count($data) > 0) {
                foreach ($data as $dataOutput) {
                    $fileOutputURIs[] = $mapper->map(json_encode($dataOutput), FileOutputURI::class);
                }
            }
        } catch (\Exception $e) {
            throw $e;
        }

        return $fileOutputURIs;
    }
}
