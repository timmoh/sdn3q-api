<?php


namespace SDN3Q\Model;
use MintWare\JOM\JsonField;


class ChannelTranscoderFormat extends BaseModel {
	/**
	 * ChannelFormatId
	 *
	 * @var int
	 * @JsonField(name="ChannelFormatId", type="int")
	 */
	public $channelFormatId;

   /**
    * Title
    *
    * @var string
    * @JsonField(name="Label", type="string")
    */
   public $label;

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

   /**
    * VideoFPS
    *
    * @var double
    * @JsonField(name="VideoFPS", type="double|int")
    */
   public $videoFps;



   /**
    * AudioCodec
    *
    * @var string
    * @JsonField(name="AudioCodec", type="string")
    */
   public $audioCodec;

   /**
    * AudioBitRate
    *
    * @var int
    * @JsonField(name="AudioBitRate", type="int")
    */
   public $audioBitRate;

   /**
    * AudioSampleRate
    *
    * @var int
    * @JsonField(name="AudioSampleRate", type="int")
    */
   public $audioSampleRate;


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