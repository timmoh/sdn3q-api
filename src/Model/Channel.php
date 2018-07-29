<?php


namespace SDN3Q\Model;
use MintWare\JOM\JsonField;

class Channel extends BaseModel {
	/**
	 * @var int
	 * @JsonField(name="Id", type="int")
	 */
	public $Id;
	/**
	 * Status of the Channel
	 * @var \SDN3Q\Model\ChannelStatus
	 * @JsonField(type="\SDN3Q\Model\ChannelStatus")
	 */
	public $ChannelStatus;

	/**
	 * Project
	 *
	 * @var \SDN3Q\Model\Project
	 * @JsonField(type="\SDN3Q\Model\Project")
	 */
	public $Project;
	/**
	 * Time of creation
	 *
	 * @var \DateTime
	 * @JsonField(name="CreatedAt", type="datetime")
	 */
	public $CreatedAt;
	/**
	 * Time of last update
	 * @var datetime
	 * @JsonField(name="LastUpdatedAt", type="datetime")
	 */
	public $LastUpdatedAt;
}