<?php

namespace SDN3Q\Model;


class ChannelStatus extends BaseModel {
	/**
	 * Online Status of the Channel
	 * @var boolean
	 * @JsonField(name="IsOnline", type="boolean")
	 */
	public $isOnline;

}