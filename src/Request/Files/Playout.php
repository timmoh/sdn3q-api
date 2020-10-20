<?php

namespace SDN3Q\Request\Files;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Model\EmbedCodes;
use SDN3Q\Model\FilePlayout;
use SDN3Q\Request\BaseRequest;

class Playout extends BaseRequest
{
    protected static $endpoint = 'projects';

    /**
     * Return Playout Id's of a file
     *
     * @param int $projectId
     * @param int $fileId
     *
     * @return FilePlayoute[]|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function getPlayouts(int $projectId, int $fileId)
    {
        parent::$subUrl = $projectId . '/files/' . $fileId . '/playouts';
        $playouts = [];

        try {
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $data = json_decode($response, true);
            if (count($data['FilePlayouts']) > 0) {
                foreach ($data['FilePlayouts'] as $dataFiles) {
                    $playouts[] = $mapper->map(json_encode($dataFiles), FilePlayout::class);
                }
            }
        } catch (\Exception $e) {
            throw $e;
        }

        return $playouts;
    }

    /**
     * Return the Embed Codes of the default Playout of a File
     *
     * @param int   $projectId
     * @param int   $fileId
     * @param array $parms
     *
     * @return EmbedCodes|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function getPlayoutDefault(int $projectId, int $fileId, $parms = [])
    {
        $embed = null;
        parent::$subUrl = $projectId . '/files/' . $fileId . '/playouts/default/embed';
        self::$requestParmAsJson = false;
        self::$requestParmAsQuery = true;
        self::$possibleParm = [
            'ContainerId',//	string	false		ID of player DIV tag
            'Width',//	integer	false		Player width
            'Height',//	integer	false		Player height
            'OverrideSettings',//	boolean	false		Overrides the specified settings by embed code
            'Autostart',//	boolean	false		Start playback automatically
            'Popover',//	boolean	false		Show player as popover
            'ActivateAds',//	boolean	false		Enable advertising
            'VASTID',//	integer	false		AdTag Id
        ];
        foreach ($parms as $key => $value) {
            self::$requestParm[$key] = $value;
        }

        try {
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $data = json_decode($response, true);
            $embed = $mapper->map(json_encode($data['FileEmbedCodes']), EmbedCodes::class);

            return $embed;
        } catch (\Exception $e) {
            throw $e;
        }

        return $embed;
    }

    /**
     * Return the Embed Codes of the Playout of a File
     *
     * @param int         $projectId
     * @param int         $fileId
     * @param string|null $playoutId
     * @param array       $parms
     *
     * @return EmbedCodes|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function getPlayout(int $projectId, int $fileId, string $playoutId = null, $parms = [])
    {
        if (is_null($playoutId)) {
            return self::getPlayoutDefault($projectId, $fileId);
        }
        $embed = null;
        parent::$subUrl = $projectId . '/files/' . $fileId . '/playouts/' . $playoutId . '/embed';
        self::$possibleParm = [
            'ContainerId',//	string	false		ID of player DIV tag
            'Width',//	integer	false		Player width
            'Height',//	integer	false		Player height
            'OverrideSettings',//	boolean	false		Overrides the specified settings by embed code
            'Autostart',//	boolean	false		Start playback automatically
            'Popover',//	boolean	false		Show player as popover
            'ActivateAds',//	boolean	false		Enable advertising
            'VASTID',//	integer	false		AdTag Id
        ];

        foreach ($parms as $key => $value) {
            self::$requestParm[$key] = $value;
        }

        try {
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $data = json_decode($response, true);
            $embed = $mapper->map(json_encode($data['FileEmbedCodes']), EmbedCodes::class);

            return $embed;
        } catch (\Exception $e) {
            throw $e;
        }

        return $embed;
    }
}
