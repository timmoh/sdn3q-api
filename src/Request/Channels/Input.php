<?php

namespace SDN3Q\Request\Channels;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Model\ChannelInput;
use SDN3Q\Request\BaseRequest;

class Input extends BaseRequest
{
    protected static $endpoint = 'channels';

    /**
     * Return Input of a Channel
     *
     * @param int $channelId
     *
     * @return ChannelInput
     * @throws \Exception
     */
    public static function getInput(int $channelId)
    {
        parent::$subUrl = $channelId . '/input';

        try {
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $input = $mapper->map($response, ChannelInput::class);
        } catch (\Exception $e) {
            throw $e;
        }

        return $input;
    }

    /**
     * Change Channel Input
     *
     * @param int    $channelId
     * @param string $streamInType
     * @param bool   $useIngestVersion2
     * @param int    $timeshiftDuration
     *
     * @return ChannelInput
     * @throws \Exception
     */
    public static function changeInput(int $channelId, string $streamInType, bool $useIngestVersion2 = false, int $timeshiftDuration = 0)
    {
        parent::$subUrl = $channelId . '/input';
        self::$method = 'put';
        self::$possibleParm = [
            'StreamInType',
            'UseIngestVersion2',
            'TimeshiftDuration',
        ];

        try {
            self::$requestParm['StreamInType'] = $streamInType;
            self::$requestParm['UseIngestVersion2'] = $useIngestVersion2;
            self::$requestParm['TimeshiftDuration'] = $timeshiftDuration;
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $input = $mapper->map($response, ChannelInput::class);
        } catch (\Exception $e) {
            throw $e;
        }

        return $input;
    }
}
