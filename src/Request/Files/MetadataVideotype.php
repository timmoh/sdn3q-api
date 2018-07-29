<?php

namespace SDN3Q\Request\Files;

use SDN3Q\Request\BaseRequest;

/*
LINK /api/v2/projects/{ProjectId}/files/{FileId}/metadata/videotype/{VideotypeId} Add (link) Videotype to File Metadata
UNLINK /api/v2/projects/{ProjectId}/files/{FileId}/metadata/videotype/{VideotypeId} Remove (unlink) Videotype from File Metadata
*/

class MetadataVideotype extends BaseRequest {
	protected static $endpoint = 'projects';

	public static function linkMetadataVideotype( int $projectId, int $fileId, $videotypeId ) {
		throw new \SDN3Q\Exception\NotImplemented();
	}

	public static function unlinkMetadataVideotype( int $projectId, int $fileId, $videotypeId ) {
		throw new \SDN3Q\Exception\NotImplemented();
	}
}

