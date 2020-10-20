<?php


namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class ChannelDistribution extends BaseModel
{
    /**
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

    /**
     * Channel
     *
     * @var \SDN3Q\Model\Channel
     * @DataField(name="Channel",type="\SDN3Q\Model\Channel")
     */
    public $channel;

    /**
     * Server URL of Target Platform
     *
     * @var string
     * @DataField(name="ReceiverURL", type="string")
     */
    public $receiverUrl;

    /**
     * Key (Stream Key or Stream Name) of Target Platform
     *
     * @var string
     * @DataField(name="ReceiverKey", type="string")
     */
    public $receiverKey;

    /**
     * Preview URL of Target Platform
     *
     * @var string
     * @DataField(name="ReceiverPreviewURL", type="string")
     */
    public $receiverPreviewUrl;

    /**
     * @var bool
     * @DataField(name="IsDistributing", type="boolean")
     */
    public $isDistributing;

    /**
     * @var bool
     * @DataField(name="IsStarting", type="boolean")
     */
    public $isStarting;

    /**
     * @var bool
     * @DataField(name="IsStoping", type="boolean")
     */
    public $isStoping;

    /**
     * Start Automatically
     *
     * @var bool
     * @DataField(name="AutoDistributing", type="boolean")
     */
    public $autoDistributing;
}
