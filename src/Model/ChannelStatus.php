<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;

class ChannelStatus extends BaseModel {
	/**
	 * Online Status of the Channel
	 * @var boolean
	 * @DataField(name="IsOnline", type="boolean")
	 */
	public $isOnline;

}