<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class FileProperties extends BaseModel
{
    /**
     * Length
     *
     * @var float
     * @DataField(name="Length", type="float", preTransformer="\SDN3Q\Transformer\FloatTransformer")
     */
    public $length;

    /**
     * Size
     *
     * @var string
     * @DataField(name="Size", type="string")
     */
    public $size;

    /**
     * VideoFormat
     *
     * @var string
     * @DataField(name="videoFormat", type="string")
     */
    public $VideoFormat;

    /**
     * VideoBitRate
     *
     * @var int
     * @DataField(name="VideoBitRate", type="integer")
     */
    public $videoBitRate;

    /**
     * VideoWidth
     *
     * @var int
     * @DataField(name="VideoWidth", type="integer")
     */
    public $VideoWidth;

    /**
     * VideoHeight
     *
     * @var int
     * @DataField(name="VideoHeight", type="integer")
     */
    public $videoHeight;

    /**
     * VideoFPS
     *
     * @var int
     * @DataField(name="VideoFPS", type="integer")
     */
    public $videoFPS;

    /**
     * AudioFormat
     *
     * @var string
     * @DataField(name="AudioFormat", type="string")
     */
    public $audioFormat;

    /**
     * AudioBitRate
     *
     * @var int
     * @DataField(name="AudioBitRate", type="integer")
     */
    public $audioBitRate;

    /**
     * AudioSampleRate
     *
     * @var int
     * @DataField(name="AudioSampleRate", type="integer")
     */
    public $audioSampleRate;

    /**
     * AudioChannels
     *
     * @var int
     * @DataField(name="AudioChannels", type="integer")
     */
    public $audioChannels;
}
