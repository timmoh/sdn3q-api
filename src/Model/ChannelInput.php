<?php


namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class ChannelInput extends BaseModel
{
    /**
     * Type of Channel input
     *
     * @var string
     * @DataField(name="StreamInType", type="string")
     */
    public $streamInType;

    /**
     * Connection Details for Input
     *
     * @var \SDN3Q\Model\StreamInConnection
     * @DataField(name="StreamInConnection", type="\SDN3Q\Model\StreamInConnection")
     */
    public $streamInConnection;
}
