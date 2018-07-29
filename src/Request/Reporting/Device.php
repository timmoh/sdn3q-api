<?php
namespace SDN3Q\Request\Reporting;

use SDN3Q\Request\BaseRequest;

/*
/api/v2/reporting/projects/{ProjectId}/devices
GET /api/v2/reporting/projects/{ProjectId}/devices Return Reportings about Views from Countries for a Project
*/

class Device extends BaseRequest{
	protected static $endpoint ='reporting';
	
	public static function getDevices(int $projectId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
}