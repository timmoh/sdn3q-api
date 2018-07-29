<?php
namespace SDN3Q\Request\Reporting;

use SDN3Q\Request\BaseRequest;

/*
/api/v2/reporting/projects/{ProjectId}/fileviews
GET /api/v2/reporting/projects/{ProjectId}/fileviews Return FileView Reportings for a Vod Project
/api/v2/reporting/projects/{ProjectId}/fileviews/{FileId}
GET /api/v2/reporting/projects/{ProjectId}/fileviews/{FileId} Return FileView Reportings for a File of a Vod Project
*/

class FileView extends BaseRequest{
	protected static $endpoint ='reporting';
	
	public static function getFileViews(int $projectId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function getFileView(int $projectId,int $fileId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
}