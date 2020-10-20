<?php

namespace SDN3Q\Model\Output;

use MintWare\DMM\DataField;
use SDN3Q\Model\BaseModel;

class MbrOutput extends BaseModel
{
    /**
     * @var string
     * @DataField(name="hls", type="string")
     */
    public $hls;
}
