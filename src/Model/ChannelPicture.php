<?php


namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class ChannelPicture extends BaseModel
{
    /**
     * Use Channel Picture
     *
     * @var bool
     * @DataField(name="UseOnlinePicture", type="bool")
     */
    public $useOnlinePicture;
    /**
     * URI of Channel Picture
     *
     * @var string
     * @DataField(name="OnlinePictureURI", type="string")
     */
    public $onlinePictureURI;
}
