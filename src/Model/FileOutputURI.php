<?php

namespace SDN3Q\Model;
use MintWare\JOM\JsonField;


class FileOutputURI extends BaseModel {

	/**
	 * Streaming
	 *
	 * @var array
	 * @JsonField(name="Streaming", type="array")
	 */
	public $streaming;

	/**
	 * Progressive
	 *
	 * @var array
	 * @JsonField(name="Progressive", type="array")
	 */
	public $progressive;


	/**
	 * ProgressiveWithSubclips
	 *
	 * @var array
	 * @JsonField(name="ProgressiveWithSubclips", type="array")
	 */
	public $progressiveWithSubclips;

	/**
	 * Download
	 *
	 * @var array
	 * @JsonField(name="Download", type="array")
	 */
	public $download;

}