<?php

namespace SDN3Q\Request\Files;

use SDN3Q\Request\BaseRequest;

class MetadataVideotype extends BaseRequest
{
    protected static $endpoint = 'projects';

    /**
     *  Add (link) Videotype to File Metadata
     *
     * @param int $projectId
     * @param int $fileId
     * @param     $videotypeId
     *
     * @return FileMetadata|null
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function linkMetadataVideotype(int $projectId, int $fileId, $videotypeId)
    {
        $fileMeta = null;
        parent::$subUrl     = $projectId . '/files/' . $fileId . '/metadata/videotype/'.$videotypeId;
        self::$method              = 'link';
        throw new \SDN3Q\Exception\NotImplemented();

        return $fileMeta;
    }

    /**
     * Remove (unlink) Videotype from File Metadata
     *
     * @param int $projectId
     * @param int $fileId
     * @param     $videotypeId
     *
     * @return FileMetadata|null
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function unlinkMetadataVideotype(int $projectId, int $fileId, $videotypeId)
    {
        $fileMeta = null;
        parent::$subUrl     = $projectId . '/files/' . $fileId . '/metadata/videotype/'.$videotypeId;
        self::$method              = 'unlink';
        throw new \SDN3Q\Exception\NotImplemented();

        return $fileMeta;
    }
}
