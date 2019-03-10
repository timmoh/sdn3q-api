<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;


class FileOutputURI extends BaseModel {

	/**
	 * Streaming
	 *
	 * @var array
	 * @DataField(name="Streaming", type="array")
	 */
	public $streaming;

	/**
	 * Progressive
	 *
	 * @var array
	 * @DataField(name="Progressive", type="array")
	 */
	public $progressive;


	/**
	 * ProgressiveWithSubclips
	 *
	 * @var array
	 * @DataField(name="ProgressiveWithSubclips", type="array")
	 */
	public $progressiveWithSubclips;

	/**
	 * Download
	 *
	 * @var array
	 * @DataField(name="Download", type="array")
	 */
	public $download;

}