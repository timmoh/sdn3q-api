<?php

namespace SDN3Q\Model\Output;

use SDN3Q\Model\BaseModel;
use MintWare\DMM\DataField;

class MbrOutput extends BaseModel
{

    /**
     * @var string
     * @DataField(name="hls", type="string")
     */
    public $hls;
}
