<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;

class ProjectUsageModel extends BaseModel {

	/**
	 * @var string
	 * @DataField(name="Day", type="string")
	 */
	public $day;

	/**
	 * @var string
	 * @DataField(name="Month", type="string")
	 */
	public $month;

	/**
	 * @var string
	 * @DataField(name="Bandwidth", type="string")
	 */
	public $bandwidth;

	/**
	 * @var string
	 * @DataField(name="Storage", type="string")
	 */
	public $storage;

	/**
	 * @var string
	 * @DataField(name="EncodingMinutes", type="string")
	 */
	public $encodingMinutes;

	/**
	 * @var string
	 * @DataField(name="TranscodingMinutes", type="string")
	 */
	public $transcodingMinutes;

	/**
	 * @var string
	 * @DataField(name="VideoAIMinutes", type="string")
	 */
	public $videoAiMinutes;

	/**
	 * @var string
	 * @DataField(name="DRMLicenses", type="string")
	 */
	public $drmLicenses;

	/**
	 * @var string
	 * @DataField(name="Users", type="string")
	 */
	public $users;

}






