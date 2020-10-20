<?php

namespace SDN3Q\Request\Channels;

use MintWare\DMM\ObjectMapper;
use MintWare\DMM\Serializer\JsonSerializer;
use SDN3Q\Enum\ChannelDistributionAction;
use SDN3Q\Model\Channel;
use SDN3Q\Model\ChannelDistribution;
use SDN3Q\Request\BaseRequest;

class Distribution extends BaseRequest
{
    protected static $endpoint = 'channels';

    /**
     * Return enabled Channel Distribution
     *
     * @return Channel[]|array
     * @throws \Exception
     */
    public static function getDistributions()
    {
        parent::$subUrl = 'distributions';
        $channelsDistributions = [];

        try {
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $data = json_decode($response, true);
            print_r($data);
            if (count($data['ChannelDistributions']) > 0) {
                foreach ($data['ChannelDistributions'] as $distribution) {
                    $channelsDistributions[] = $mapper->map(json_encode($distribution), ChannelDistribution::class);
                }
            }
        } catch (\Exception $e) {
            throw $e;
        }

        return $channelsDistributions;
    }

    /**
     * Return a ChannelDistribution by Id
     *
     * @param int $channelId
     * @param int $channelDistributionId
     *
     * @return ChannelDistribution
     * @throws \Exception
     */
    public static function getDistribution(int $channelId, int $channelDistributionId)
    {
        parent::$subUrl = $channelId . '/distributions/' . $channelDistributionId;
        $channelDistribution = null;

        try {
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $channelDistribution = $mapper->map($response, ChannelDistribution::class);
        } catch (\Exception $e) {
            throw $e;
        }

        return $channelDistribution;
    }

    /**
     * Delete a ChannelDistribution by Id
     *
     * @param int $channelId
     * @param int $channelDistributionId
     *
     * @return ChannelDistribution
     * @throws \Exception
     */
    public static function deleteDistribution(int $channelId, int $channelDistributionId)
    {
        parent::$subUrl = $channelId . '/distributions/' . $channelDistributionId;
        $channelDistribution = null;
        self::$method = 'delete';

        try {
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $channelDistribution = $mapper->map($response, ChannelDistribution::class);
        } catch (\Exception $e) {
            throw $e;
        }

        return $channelDistribution;
    }

    /**
     * Edit a ChannelDistribution
     *
     * @param int $channelId
     * @param int $channelDistributionId
     *
     * @return ChannelDistribution
     * @throws \Exception
     */
    public static function changeDistribution(int $channelId, int $channelDistributionId, array $parms = [])
    {
        parent::$subUrl = $channelId . '/distributions/' . $channelDistributionId;
        $channelDistribution = null;
        self::$method = 'put';
        self::$possibleParm = ['ReceiverPreviewURL', 'AutoDistributing'];
        self::$requiredParm = ['Label', 'ReceiverURL', 'ReceiverKey'];
        foreach ($parms as $key => $value) {
            self::$requestParm[$key] = $value;
        }

        try {
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $channelDistribution = $mapper->map($response, ChannelDistribution::class);
        } catch (\Exception $e) {
            throw $e;
        }

        return $channelDistribution;
    }

    /**
     * Starts a ChannelDistribution
     *
     * @param int $channelId
     * @param int $channelDistributionId
     *
     * @return ChannelDistribution
     * @throws \Exception
     */
    public static function startDistribution(int $channelId, int $channelDistributionId)
    {
        try {
            return self::actionDistribution($channelId, $channelDistributionId, ChannelDistributionAction::START);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Stops a ChannelDistribution
     *
     * @param int $channelId
     * @param int $channelDistributionId
     *
     * @return ChannelDistribution
     * @throws \Exception
     */
    public static function stopDistribution(int $channelId, int $channelDistributionId)
    {
        try {
            return self::actionDistribution($channelId, $channelDistributionId, ChannelDistributionAction::STOP);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Starts / Stops a ChannelDistribution
     *
     * @param int $channelId
     * @param int    $channelDistributionId
     * @param string $action
     *
     * @return ChannelDistribution
     * @throws \Exception
     */
    public static function actionDistribution(int $channelId, int $channelDistributionId, string $action)
    {
        parent::$subUrl = $channelId . '/distributions/' . $channelDistributionId . '/StartStop';
        self::$method = 'put';
        self::$requiredParm = ['Action'];
        self::$requestParm['Action'] = $action;
        $channelDistribution = null;

        try {
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $json = json_decode($response, true);
            $channelDistribution = $mapper->map($response, ChannelDistribution::class);
        } catch (\Exception $e) {
            throw $e;
        }

        return $channelDistribution;
    }

    /**
     * Create a new ChannelDistribution
     *
     * @param int   $channelId
     * @param array $parms
     *
     * @return ChannelDistribution
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function postDistribution(int $channelId, array $parms = [])
    {
        parent::$subUrl = $channelId . '/distributions';
        self::$method = 'post';
        self::$possibleParm = ['ReceiverPreviewURL', 'AutoDistributing'];
        self::$requiredParm = ['Label', 'ReceiverURL', 'ReceiverKey'];
        foreach ($parms as $key => $value) {
            self::$requestParm[$key] = $value;
        }
        $channelDistribution = null;

        try {
            $mapper = new ObjectMapper(new JsonSerializer());
            ;
            $response = self::getResponse();
            $json = json_decode($response, true);
            $channelDistribution = $mapper->map($response, ChannelDistribution::class);
        } catch (\Exception $e) {
            throw $e;
        }

        return $channelDistribution;
    }
}
