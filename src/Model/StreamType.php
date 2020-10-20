<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class StreamType
{
    /**
     * Stream Type ID
     * @var int
     * @DataField(name="Id", type="int")
     */
    public $id;

    /**
     * Title
     *
     * @var string
     * @DataField(name="Label", type="string")
     */
    public $label;
}
