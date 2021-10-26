<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class TimeshiftWindowDimensions extends BaseModel
{
    /**
     * @var string
     * @DataField(name="StartDateTime", type="string")
     * @DataField(name="Start", type="string")
     */
    public $startDateTime;

    /**
     * @var string
     * @DataField(name="EndDateTime", type="string")
     * @DataField(name="End", type="string")
     */
    public $endDateTime;
}
