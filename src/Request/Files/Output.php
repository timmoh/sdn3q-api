<?php
namespace SDN3Q\Request\Files;
use SDN3Q\Request\BaseRequest;

/*

GET /api/v2/projects/{ProjectId}/files/{FileId}/output Return Output URIs of a file
*/
class Output extends BaseRequest{
	protected static $endpoint ='projects';
	
	public static function getOutput(int $projectId,int $fileId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
}
