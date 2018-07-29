<?php
namespace SDN3Q\Request\Projects;

use SDN3Q\Request\BaseRequest;

/*

/api/v2/projects/{ProjectId}/fileformatsettings
GET /api/v2/projects/{ProjectId}/fileformatsettings Return all global FileFormatSettings of a Video on Demand Project
/api/v2/projects/{ProjectId}/fileformatsettings/{FileFormatId}
GET /api/v2/projects/{ProjectId}/fileformatsettings/{FileFormatId} Return a FileFormatSetting of a Video on Demand Project
PUT /api/v2/projects/{ProjectId}/fileformatsettings/{FileFormatId} Set a FileFormatSetting of a Video on Demand Project

*/
class FileFormatSettings extends BaseRequest{
	protected static $endpoint ='projects';
	
	public static function getFileFormatSettings(int $projectId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function getFileEncoderSetting(int $projectId,int $fileFormatId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function putFileEncoderSetting(int $projectId,int $fileFormatId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
}
