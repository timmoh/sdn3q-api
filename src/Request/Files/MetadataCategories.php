<?php
namespace SDN3Q\Request\Files;
use SDN3Q\Request\BaseRequest;

/*
LINK /api/v2/projects/{ProjectId}/files/{FileId}/metadata/category/{CategoryId} Add (link) Category to File Metadata
UNLINK /api/v2/projects/{ProjectId}/files/{FileId}/metadata/category/{CategoryId} Remove (unlink) Category from File Metadata
*/
class MetadataCategories extends BaseRequest{
	protected static $endpoint ='projects';
	
	public static function linkMetadataCategories(int $projectId,int $fileId,int $categoryId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
	public static function unlinkMetadataCategories(int $projectId,int $fileId,int $categoryId){
		throw new \SDN3Q\Exception\NotImplemented();
	}
	
}

