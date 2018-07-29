<?php
namespace SDN3Q\Request\Files;
use SDN3Q\Request\BaseRequest;

/*
GET /api/v2/projects/{ProjectId}/files/{FileId}/metadata Return Metadata of a File
PUT /api/v2/projects/{ProjectId}/files/{FileId}/metadata Change Metadata of a File
*/
class Metadata extends BaseRequest{
	protected static $endpoint ='projects';
	
	public static function getMetadata(int $projectId,int $fileId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function changeMetadata(int $projectId,int $fileId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
}
