<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;


class FileFormatSettings extends BaseModel {

	/**
	 * VideoBitRate
	 *
	 * @var int
	 * @DataField(name="VideoBitRate", type="int")
	 */
	public $videoBitRate;
	/**
	 * VideoProfile
	 *
	 * @var string
	 * @DataField(name="VideoProfile", type="string")
	 */
	public $videoProfile;


	/**
	 * VideoFPS
	 *
	 * @var string
	 * @DataField(name="VideoFPS", type="float")
	 */
	public $videoFps;

	/**
	 * AudioBitRate
	 *
	 * @var string
	 * @DataField(name="AudioBitRate", type="int")
	 */
	public $audioBitRate;

	/**
	 * AudioSampleRate
	 *
	 * @var string
	 * @DataField(name="AudioSampleRate", type="int")
	 */
	public $audioSampleRate;

	/**
	 * AudioChannels
	 *
	 * @var string
	 * @DataField(name="AudioChannels", type="int")
	 */
	public $audioChannels;

	/**
	 * FileFormatId
	 *
	 * @var string
	 * @DataField(name="FileFormatId", type="int")
	 */
	public $fileFormatId;


	/**
	 * Label
	 *
	 * @var string
	 * @DataField(name="Label", type="string")
	 */
	public $label;

	/**
	 * MIMEType
	 *
	 * @var string
	 * @DataField(name="MIME-Type", type="string")
	 */
	public $mimeType;

	/**
	 * VideoCodec
	 *
	 * @var string
	 * @DataField(name="VideoCodec", type="string")
	 */
	public $videoCodec;

	/**
	 * VideoHeight
	 *
	 * @var int
	 * @DataField(name="VideoHeight", type="int")
	 */
	public $videoHeight;

}