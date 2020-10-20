<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class ChannelFormatSetting extends BaseModel
{
    /**
     * @var \SDN3Q\Model\ChannelTranscoderFormat
     * @DataField(name="Format", type="\SDN3Q\Model\ChannelTranscoderFormat")
     */
    public $format;

    /**
     * @var \SDN3Q\Model\ChannelTranscoderFormat
     * @DataField(name="FormatSetting", type="\SDN3Q\Model\ChannelTranscoderFormat")
     */
    public $formatSetting;
}
