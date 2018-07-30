<?php


namespace SDN3Q\Model;
use MintWare\JOM\JsonField;

class Channel extends BaseModel {
	/**
	 * @var int
	 * @JsonField(name="Id", type="int")
	 */
	public $id;
	/**
	 * Status of the Channel
	 * @var \SDN3Q\Model\ChannelStatus
	 * @JsonField(type="\SDN3Q\Model\ChannelStatus")
	 */
	public $channelStatus;

	/**
	 * Project
	 *
	 * @var \SDN3Q\Model\Project
	 * @JsonField(type="\SDN3Q\Model\Project")
	 */
	public $project;
	/**
	 * Time of creation
	 *
	 * @var \DateTime
	 * @JsonField(name="CreatedAt", type="\DateTime")
	 */
	public $createdAt;
	/**
	 * Time of last update
	 * @var \DateTime
	 * @JsonField(name="LastUpdatedAt", type="\DateTime")
	 */
	public $lastUpdatedAt;
}