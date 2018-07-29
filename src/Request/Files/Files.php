<?php
namespace SDN3Q\Request\Files;
use SDN3Q\Request\BaseRequest;

/*
GET /api/v2/projects/{ProjectId}/files Return a collection of Files in Project.
POST /api/v2/projects/{ProjectId}/files Create a new File Entity and return the File Upload URI in the Location Header
/api/v2/projects/{ProjectId}/files/{FileId}
DELETE /api/v2/projects/{ProjectId}/files/{FileId} Delete a File by Id
GET /api/v2/projects/{ProjectId}/files/{FileId} Return a File by Id
*/
class Files extends BaseRequest{
	protected static $endpoint ='projects';
	
	public static function getFiles(int $projectId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function getFile(int $projectId,int $fileId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function postFile(int $projectId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function deleteFile(int $projectId,int $fileId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
}

