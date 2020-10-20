<?php

namespace SDN3Q\Request\Reporting;

use SDN3Q\Request\BaseRequest;

class Device extends BaseRequest
{
    protected static $endpoint = 'reporting';

    /**
     * Return Reportings about Views from Devieces for a Project
     *
     * @param int $projectId
     *
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function getDevices(int $projectId)
    {
        parent::$subUrl = 'projects/' . $projectId . '/devices';

        throw new \SDN3Q\Exception\NotImplemented();
    }
}
