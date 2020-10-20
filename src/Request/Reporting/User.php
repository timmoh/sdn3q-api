<?php
namespace SDN3Q\Request\Reporting;

use SDN3Q\Request\BaseRequest;

class User extends BaseRequest
{
    protected static $endpoint ='reporting';

    /**
     * Return FileView Reportings from Users for a Vod Project
     * @param int $projectId
     *
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function getUsers(int $projectId)
    {
        parent::$subUrl = 'projects/'. $projectId . '/fileuserviews';
        throw new \SDN3Q\Exception\NotImplemented();
    }

    /**
     * Return FileView Reportings from a User identified by UserToken of a Vod Project
     *
     * @param int $projectId
     * @param string $userToken
     *
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function getUser(int $projectId, string $userToken)
    {
        parent::$subUrl = 'projects/'. $projectId . '/fileuserviews/'.$userToken;
        throw new \SDN3Q\Exception\NotImplemented();
    }
}
