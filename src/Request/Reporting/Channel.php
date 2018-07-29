<?php

namespace SDN3Q\Request\Reporting;

use SDN3Q\Request\BaseRequest;


class Channel extends BaseRequest {
	protected static $endpoint = 'reporting';

	/**
	 *
	 * GET /api/v2/reporting/projects/{ProjectId}/views Return Reportings for a Project
	 *
	 * @param int $projectId
	 *
	 * @throws \SDN3Q\Exception\NotImplemented
	 */
	public static function getChannels( int $projectId ) {
		throw new \SDN3Q\Exception\NotImplemented();
	}
}