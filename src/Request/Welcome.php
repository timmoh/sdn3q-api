<?php

namespace SDN3Q\Request;

class Welcome extends BaseRequest
{
    protected static $endpoint = '';

    /**
     * Test Connection
     * @return array|mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function textConnection()
    {
        $data = [];
        try {
            $response = self::getResponse();
            $data     = json_decode($response, true);
        } catch (\Exception $e) {
            throw $e;
        }

        return $data;
    }
}
