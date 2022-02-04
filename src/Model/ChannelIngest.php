<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class ChannelIngest extends BaseModel {

	/**
	 * Type of Channel input
	 *
	 * @var string
	 * @DataField(name="StreamInType", type="string")
	 */
	public $streamInType;

	/**
	 * Connection Details for Input
	 *
	 * @var StreamInConnection
	 * @DataField(name="StreamInConnection", type="\SDN3Q\Model\StreamInConnection")
	 */
	public $streamInConnection;

	/**
	 * @var bool
	 * @DataField(name="AutomaticTranscoding", type="bool")
	 */
	public $automaticTranscoding;

	/**
	 * @var int
	 * @DataField(name="TimeshiftDuration", type="int")
	 */
	public $timeshiftDuration;

	/**
	 * @var bool
	 * @DataField(name="IsSynced", type="bool")
	 */
	public $isSynced;

	/**
	 * @var bool
	 * @DataField(name="SourceStabilizing", type="bool")
	 */
	public $sourceStabilizing;

}
