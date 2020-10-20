<?php
namespace SDN3Q\Request\Projects;

use SDN3Q\Request\BaseRequest;

/*
GET /api/v2/projects/{ProjectId}/pipeline Return the Assets in the Encoding Pipeline of a Video on Demand Project.
/api/v2/projects/{ProjectId}/pipeline/{FileId}
GET /api/v2/projects/{ProjectId}/pipeline/{FileId} Return the Pipeline Asset of the File (specified by FileId) of a Video on Demand Project.
PUT /api/v2/projects/{ProjectId}/pipeline/{FileId} Set the Pipeline Asset Settings for Encoding of the File (specified by FileId) of a Video on Demand Project
/api/v2/projects/{ProjectId}/pipeline/{FileId}/fileformat/{FileFormatId}
LINK /api/v2/projects/{ProjectId}/pipeline/{FileId}/fileformat/{FileFormatId} Add (link) FileFormat to Pipeline Asset
UNLINK /api/v2/projects/{ProjectId}/pipeline/{FileId}/fileformat/{FileFormatId} Remove (unlink) FileFormat from Pipeline Asset
/api/v2/projects/{ProjectId}/pipeline/{FileId}/watermarkpicture
PUT /api/v2/projects/{ProjectId}/pipeline/{FileId}/watermarkpicture Put a WatermarkPicture to Pipeline Asset
*/

class FileEncoderPipeline extends BaseRequest
{
    protected static $endpoint = 'projects';
    
    public static function getFileEncoderPipelines(int $projectId)
    {
        throw new \SDN3Q\Exception\NotImplemented();
    }
    
    public static function getFileEncoderPipeline(int $projectId, int $fileId)
    {
        throw new \SDN3Q\Exception\NotImplemented();
    }
    
    public static function putFileEncoderPipeline(int $projectId, int $fileId)
    {
        throw new \SDN3Q\Exception\NotImplemented();
    }
    
    public static function linkFileEncoderPipelineFileformat(int $projectId, int $fileId, int $fileFormatId)
    {
        throw new \SDN3Q\Exception\NotImplemented();
    }
    
    public static function unlinkFileEncoderPipelineFileformat(int $projectId, int $fileId, int $fileFormatId)
    {
        throw new \SDN3Q\Exception\NotImplemented();
    }
    
    public static function putFileEncoderPipelineWatermarkPicture(int $projectId, int $fileId)
    {
        throw new \SDN3Q\Exception\NotImplemented();
    }
}
