<?php

namespace SDN3Q\Request\Reporting;

use SDN3Q\Request\BaseRequest;

class FileView extends BaseRequest {

	protected static $endpoint = 'reporting';

	/**
	 * Return FileView Reportings for a Vod Project
	 *
	 * @param int $projectId
	 *
	 * @throws \SDN3Q\Exception\NotImplemented
	 */
	public static function getFileViews(int $projectId) {
		parent::$subUrl = 'projects/' . $projectId . '/fileviews';
		throw new \SDN3Q\Exception\NotImplemented();
	}

	/**
	 * Return FileView Reportings for a File of a Vod Project
	 *
	 * @param int $projectId
	 * @param int $fileId
	 *
	 * @throws \SDN3Q\Exception\NotImplemented
	 */
	public static function getFileView(int $projectId, int $fileId) {
		parent::$subUrl = 'projects/' . $projectId . '/fileviews/' . $fileId;
		throw new \SDN3Q\Exception\NotImplemented();
	}

}