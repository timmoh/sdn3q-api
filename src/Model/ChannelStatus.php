<?php
namespace SDN3Q\Model;

use MintWare\JOM\JsonField;


class ChannelStatus extends BaseModel {
	/**
	 * Online Status of the Channel
	 * @var boolean
	 * @JsonField(name="IsOnline", type="boolean")
	 */
	public $IsOnline;

}