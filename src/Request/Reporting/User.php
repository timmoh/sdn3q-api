<?php
namespace SDN3Q\Request\Reporting;

use SDN3Q\Request\BaseRequest;

/*
/api/v2/reporting/projects/{ProjectId}/fileuserviews
GET /api/v2/reporting/projects/{ProjectId}/fileuserviews Return FileView Reportings from Users for a Vod Project
/api/v2/reporting/projects/{ProjectId}/fileuserviews/{UserToken}
GET /api/v2/reporting/projects/{ProjectId}/fileuserviews/{UserToken} Return FileView Reportings from a User identified by UserToken of a Vod Project
*/

class User extends BaseRequest{
	protected static $endpoint ='reporting';
	
	public static function getUsers(int $projectId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function getUser(int $projectId,string $userToken){
		throw new \SDN3Q\Exception\NotImplemented();
	}
}