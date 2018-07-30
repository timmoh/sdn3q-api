<?php


namespace SDN3Q\Model;
use MintWare\JOM\JsonField;


class ChannelTranscoderFormat extends FileFormatSettings {
	/**
	 * ChannelFormatId
	 *
	 * @var int
	 * @JsonField(name="ChannelFormatId", type="int")
	 */
	public $channelFormatId;
	/**
	 * AudioChannels
	 *
	 * @var int
	 * @JsonField(name="AudioChannels", type="int")
	 */
	public $audioChannels;

	/**
	 * Amount
	 *
	 * @var int
	 * @JsonField(name="Amount", type="int")
	 */
	public $amount;
}