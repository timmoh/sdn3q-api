<?php
namespace SDN3Q\Request\Files;

use SDN3Q\Request\BaseRequest;

class MetadataCategories extends BaseRequest
{
    protected static $endpoint = 'projects';

    /**
     * Add (link) Category to File Metadata
     *
     * @param int $projectId
     * @param int $fileId
     * @param int $categoryId
     *
     * @return FileMetadata|null
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function linkMetadataCategories(int $projectId, int $fileId, int $categoryId)
    {
        $fileMeta = null;
        parent::$subUrl = $projectId . '/files/' . $fileId . '/metadata/category/'.$categoryId;
        self::$method = 'link';

        throw new \SDN3Q\Exception\NotImplemented();

        return $fileMeta;
    }

    /**
     * Remove (unlink) Category from File Metadata
     *
     * @param int $projectId
     * @param int $fileId
     * @param int $categoryId
     *
     * @return FileMetadata|null
     * @throws \SDN3Q\Exception\NotImplemented
     */
    public static function unlinkMetadataCategories(int $projectId, int $fileId, int $categoryId)
    {
        $fileMeta = null;
        parent::$subUrl = $projectId . '/files/' . $fileId . '/metadata/category/'.$categoryId;
        self::$method = 'unlink';

        throw new \SDN3Q\Exception\NotImplemented();

        return $fileMeta;
    }
}
