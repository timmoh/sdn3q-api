<?php

namespace SDN3Q\Model;
use MintWare\JOM\JsonField;

class FileProperties extends BaseModel {

	/**
	 * Length
	 *
	 * @var float
	 * @JsonField(name="Length", type="float")
	 */
	public $length;

	/**
	 * Size
	 *
	 * @var string
	 * @JsonField(name="Size", type="string")
	 */

	public $size;

	/**
	 * VideoFormat
	 *
	 * @var string
	 * @JsonField(name="videoFormat", type="string")
	 */
	public $VideoFormat;
	/**
	 * VideoBitRate
	 *
	 * @var integer
	 * @JsonField(name="VideoBitRate", type="integer")
	 */
	public $videoBitRate;
	/**
	 * VideoWidth
	 *
	 * @var integer
	 * @JsonField(name="VideoWidth", type="integer")
	 */
	public $VideoWidth;
	/**
	 * VideoHeight
	 *
	 * @var integer
	 * @JsonField(name="VideoHeight", type="integer")
	 */
	public $videoHeight;
	/**
	 * VideoFPS
	 *
	 * @var float
	 * @JsonField(name="VideoFPS", type="float")
	 */
	public $videoFPS;

	/**
	 * AudioFormat
	 *
	 * @var string
	 * @JsonField(name="AudioFormat", type="string")
	 */
	public $audioFormat;
	/**
	 * AudioBitRate
	 *
	 * @var integer
	 * @JsonField(name="AudioBitRate", type="integer")
	 */
	public $audioBitRate;
	/**
	 * AudioSampleRate
	 *
	 * @var integer
	 * @JsonField(name="AudioSampleRate", type="integer")
	 */
	public $audioSampleRate;
	/**
	 * AudioChannels
	 *
	 * @var integer
	 * @JsonField(name="AudioChannels", type="integer")
	 */
	public $audioChannels;

}