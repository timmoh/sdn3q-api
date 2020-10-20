<?php


namespace SDN3Q\Model\Output;

use MintWare\DMM\DataField;
use SDN3Q\Model\BaseModel;

class SourceOutput extends BaseModel
{
    /**
     * rtmp
     *
     * @var string
     * @DataField(name="rtmp", type="string")
     */
    public $rtmp;

    /**
     * hls
     *
     * @var string
     * @DataField(name="hls", type="string")
     */
    public $hls;

    /**
     * hds
     *
     * @var string
     * @DataField(name="hds", type="string")
     */
    public $hds;

    /**
     * dash
     *
     * @var string
     * @DataField(name="StreamInConnection", type="string")
     */
    public $dash;
}
