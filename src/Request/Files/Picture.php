<?php
namespace SDN3Q\Request\Files;
use SDN3Q\Request\BaseRequest;

/*

GET /api/v2/projects/{ProjectId}/files/{FileId}/pictures Return Pictures of a file
POST /api/v2/projects/{ProjectId}/files/{FileId}/pictures Create a new FilePicture and set it as Standard Picture
/api/v2/projects/{ProjectId}/files/{FileId}/pictures/standard
GET /api/v2/projects/{ProjectId}/files/{FileId}/pictures/standard Return the standard (default) Picture of a file
/api/v2/projects/{ProjectId}/files/{FileId}/pictures/{FilePictureId}
DELETE /api/v2/projects/{ProjectId}/files/{FileId}/pictures/{FilePictureId} Delete this FilePicture
/api/v2/projects/{ProjectId}/files/{FileId}/pictures/{FilePictureId}/standard
PUT /api/v2/projects/{ProjectId}/files/{FileId}/pictures/{FilePictureId}/standard Set this as Standard (default) FilePicture
*/
class Picture extends BaseRequest{
	protected static $endpoint ='projects';
	
	public static function getPictures(int $projectId,int $fileId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function postPicture(int $projectId,int $fileId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function getPictureDefault(int $projectId,int $fileId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function deletePicture(int $projectId,int $fileId,int $filePictureId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function putPicture(int $projectId,int $fileId,int $filePictureId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	
}