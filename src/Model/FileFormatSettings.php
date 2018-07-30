<?php

namespace SDN3Q\Model;

class FileFormatSettings extends BaseModel {

	/**
	 * VideoBitRate
	 *
	 * @var int
	 * @JsonField(name="VideoBitRate", type="int")
	 */
	public $videoBitRate;
	/**
	 * VideoProfile
	 *
	 * @var string
	 * @JsonField(name="VideoProfile", type="string")
	 */
	public $videoProfile;


	/**
	 * VideoFPS
	 *
	 * @var string
	 * @JsonField(name="VideoFPS", type="float")
	 */
	public $videoFps;

	/**
	 * AudioBitRate
	 *
	 * @var string
	 * @JsonField(name="AudioBitRate", type="int")
	 */
	public $audioBitRate;

	/**
	 * AudioSampleRate
	 *
	 * @var string
	 * @JsonField(name="AudioSampleRate", type="int")
	 */
	public $audioSampleRate;

	/**
	 * AudioChannels
	 *
	 * @var string
	 * @JsonField(name="AudioChannels", type="int")
	 */
	public $audioChannels;

	/**
	 * FileFormatId
	 *
	 * @var string
	 * @JsonField(name="FileFormatId", type="int")
	 */
	public $fileFormatId;


	/**
	 * Label
	 *
	 * @var string
	 * @JsonField(name="Label", type="string")
	 */
	public $label;

	/**
	 * MIMEType
	 *
	 * @var string
	 * @JsonField(name="MIME-Type", type="string")
	 */
	public $mimeType;

	/**
	 * VideoCodec
	 *
	 * @var string
	 * @JsonField(name="VideoCodec", type="string")
	 */
	public $videoCodec;

	/**
	 * VideoHeight
	 *
	 * @var int
	 * @JsonField(name="VideoHeight", type="int")
	 */
	public $videoHeight;

}