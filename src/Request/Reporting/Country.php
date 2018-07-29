<?php
namespace SDN3Q\Request\Reporting;

use SDN3Q\Request\BaseRequest;

/*
/api/v2/reporting/projects/{ProjectId}/countries
GET /api/v2/reporting/projects/{ProjectId}/countries Return Reportings about Views from Countries for a Project
*/

class Country extends BaseRequest{
	protected static $endpoint ='reporting';
	
	public static function getCountries(int $projectId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
}