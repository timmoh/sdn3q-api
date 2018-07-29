<?php
namespace SDN3Q\Request\Files;
use SDN3Q\Request\BaseRequest;


/*
GET /api/v2/projects/{ProjectId}/files/{FileId}/playouts Return Playout Id's of a file
/api/v2/projects/{ProjectId}/files/{FileId}/playouts/default/embed
GET /api/v2/projects/{ProjectId}/files/{FileId}/playouts/default/embed Return the Embed Codes of the default Playout of a File
/api/v2/projects/{ProjectId}/files/{FileId}/playouts/{PlayoutId}/embed
GET /api/v2/projects/{ProjectId}/files/{FileId}/playouts/{PlayoutId}/embed Return the Embed Codes of the Playout of a File
*/
class Playout extends BaseRequest{
	protected static $endpoint ='projects';
	
	public static function getPlayouts(int $projectId,int $fileId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	
	public static function getPlayoutDefault(int $projectId,int $fileId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	
	public static function getPlayout(int $projectId,int $fileId,$playoutId=null){
		if($playoutId){
			return self::getPlayoutDefault(int $projectId,int $fileId);
		} else {

		}		
		throw new \SDN3Q\Exception\NotImplemented();
	}
}

