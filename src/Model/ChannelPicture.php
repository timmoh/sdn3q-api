<?php


namespace SDN3Q\Model;
use MintWare\JOM\JsonField;


class ChannelPicture extends BaseModel {
	/**
	 * Use Channel Picture
	 *
	 * @var bool
	 * @JsonField(name="UseOnlinePicture", type="bool")
	 */
	public $useOnlinePicture;
	/**
	 * URI of Channel Picture
	 *
	 * @var string
	 * @JsonField(name="OnlinePictureURI", type="string")
	 */
	public $onlinePictureURI;
}