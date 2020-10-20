<?php


namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class ChannelTranscoderFormat extends BaseModel
{
    /**
     * ChannelFormatId
     *
     * @var int
     * @DataField(name="ChannelFormatId", type="int")
     */
    public $channelFormatId;

    /**
     * Title
     *
     * @var string
     * @DataField(name="Label", type="string")
     */
    public $label;

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

    /**
     * VideoFPS
     *
     * @var double
     * @DataField(name="VideoFPS", type="double|int")
     */
    public $videoFps;



    /**
     * AudioCodec
     *
     * @var string
     * @DataField(name="AudioCodec", type="string")
     */
    public $audioCodec;

    /**
     * AudioBitRate
     *
     * @var int
     * @DataField(name="AudioBitRate", type="int")
     */
    public $audioBitRate;

    /**
     * AudioSampleRate
     *
     * @var int
     * @DataField(name="AudioSampleRate", type="int")
     */
    public $audioSampleRate;


    /**
     * AudioChannels
     *
     * @var int
     * @DataField(name="AudioChannels", type="int")
     */
    public $audioChannels;

    /**
     * Amount
     *
     * @var int
     * @DataField(name="Amount", type="int")
     */
    public $amount;
}
