<?php

namespace SDN3Q\Request\Reporting;

use SDN3Q\Request\BaseRequest;

class Country extends BaseRequest
{
    protected static $endpoint = 'reporting';

    /**
     * Return Reportings about Views from Countries for a Project
     *
     * @param int $projectId
     *
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function getCountries(int $projectId)
    {
        parent::$subUrl = 'projects/' . $projectId . '/countries';

        throw new \SDN3Q\Exception\NotImplemented();
    }
}
