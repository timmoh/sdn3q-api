<?php

namespace SDN3Q\Request\Files;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Model\File;
use SDN3Q\Model\FileMerge;
use SDN3Q\Model\FileOutputURI;
use SDN3Q\Request\BaseRequest;

class Merge extends BaseRequest
{
    protected static $endpoint = 'projects';

    /**
     * Creates a merge files job
     *
     * @param int         $projectId Project ID
     * @param FileMerge[] $files     Array of files to merge
     *
     * @return int File ID of the merged video
     * @throws \Exception
     */
    public static function postMerge(int $projectId, $files)
    {
        $fileId = 0;

        self::$method              = 'post';
        parent::$requestParmAsJson = false;
        parent::$subUrl            = $projectId . '/files/merge';

        self::$possibleParm      = [
            'FileName',
            'FileFormat',
        ];
        $uploadUrl               = null;
        self::$expected_response = 'header';
        self::$jsonBody          = json_encode($files);
        try {
            $mapper   = new ObjectMapper(new JsonSerializer());
            $response = self::getResponse();
            $data     = json_decode($response, true);
            $file     = $mapper->map(json_encode($data), File::class);
            if ($file) {
                $fileId = $file->id;
            }
        } catch (\Exception $e) {
            throw $e;
        }
        return $fileId;
    }
}
