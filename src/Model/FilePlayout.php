<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class FilePlayout extends BaseModel
{

    /**
     * ID
     *
     * @var string
     * @DataField(name="Id", type="string")
     */
    public $Id;
    /**
     * Label
     *
     * @var string
     * @DataField(name="Label", type="string")
     */
    public $label;
}
