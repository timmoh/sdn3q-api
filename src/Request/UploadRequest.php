<?php

namespace SDN3Q\Request;


trait UploadRequest {
	protected static $allowedUploadMimeType = [];

	/**
	 * @param $file
	 *
	 * @return string
	 * @throws \SDN3Q\Exception\WrongMimeType
	 */
	private static function checkMimeType( $file ) {
		try {
			$mimeType = mime_content_type( $file );
			if ( ! in_array( $mimeType, self::$allowedUploadMimeType ) ) {
				throw new \SDN3Q\Exception\WrongMimeType();
			}
		} catch ( \Exception $e ) {
			throw $e;
		}

		return $mimeType;
	}
}