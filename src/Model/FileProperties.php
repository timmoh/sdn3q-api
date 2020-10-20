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
     * @var integer
     * @DataField(name="VideoBitRate", type="integer")
     */
    public $videoBitRate;
    /**
     * VideoWidth
     *
     * @var integer
     * @DataField(name="VideoWidth", type="integer")
     */
    public $VideoWidth;
    /**
     * VideoHeight
     *
     * @var integer
     * @DataField(name="VideoHeight", type="integer")
     */
    public $videoHeight;
    /**
     * VideoFPS
     *
     * @var integer
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
     * @var integer
     * @DataField(name="AudioBitRate", type="integer")
     */
    public $audioBitRate;
    /**
     * AudioSampleRate
     *
     * @var integer
     * @DataField(name="AudioSampleRate", type="integer")
     */
    public $audioSampleRate;
    /**
     * AudioChannels
     *
     * @var integer
     * @DataField(name="AudioChannels", type="integer")
     */
    public $audioChannels;
}
