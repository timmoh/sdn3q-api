<?php

namespace SDN3Q\Request\Reporting;

use SDN3Q\Request\BaseRequest;

class Channel extends BaseRequest
{
    protected static $endpoint = 'reporting';

    /**
     *
     * Return Reportings for a Project
     * GET /api/v2/reporting/projects/{ProjectId}/views
     *
     * @param int $projectId
     *
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function getChannels(int $projectId)
    {
        parent::$subUrl = 'projects/' . $projectId . '/views';
        throw new \SDN3Q\Exception\NotImplemented();
    }
}
