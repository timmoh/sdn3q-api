<?php

namespace SDN3Q\Model;

class FileFormatSettings extends BaseModel {

	/**
	 * VideoBitRate
	 *
	 * @var int
	 * @JsonField(name="VideoBitRate", type="int")
	 */
	public $VideoBitRate;
	/**
	 * VideoProfile
	 *
	 * @var string
	 * @JsonField(name="VideoProfile", type="string")
	 */
	public $VideoProfile;


	/**
	 * VideoFPS
	 *
	 * @var string
	 * @JsonField(name="VideoFPS", type="float")
	 */
	public $VideoFPS;

	/**
	 * AudioBitRate
	 *
	 * @var string
	 * @JsonField(name="AudioBitRate", type="int")
	 */
	public $AudioBitRate;

	/**
	 * AudioSampleRate
	 *
	 * @var string
	 * @JsonField(name="AudioSampleRate", type="int")
	 */
	public $AudioSampleRate;

	/**
	 * AudioChannels
	 *
	 * @var string
	 * @JsonField(name="AudioChannels", type="int")
	 */
	public $AudioChannels;

	/**
	 * FileFormatId
	 *
	 * @var string
	 * @JsonField(name="FileFormatId", type="int")
	 */
	public $FileFormatId;


	/**
	 * Label
	 *
	 * @var string
	 * @JsonField(name="Label", type="string")
	 */
	public $Label;

	/**
	 * MIMEType
	 *
	 * @var string
	 * @JsonField(name="MIME-Type", type="string")
	 */
	public $MIMEType;

	/**
	 * VideoCodec
	 *
	 * @var string
	 * @JsonField(name="VideoCodec", type="string")
	 */
	public $VideoCodec;

	/**
	 * VideoHeight
	 *
	 * @var int
	 * @JsonField(name="VideoHeight", type="int")
	 */
	public $VideoHeight;

}