<?php


namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class Channel extends BaseModel
{
    /**
     * @var int
     * @DataField(name="Id", type="int")
     */
    public $id;
    /**
     * Status of the Channel
     * @var \SDN3Q\Model\ChannelStatus[]
     * @DataField(name="ChannelStatus",type="\SDN3Q\Model\ChannelStatus[]")
     */
    public $channelStatus;

    /**
     * Project
     *
     * @var \SDN3Q\Model\Project
     * @DataField(name="Project",type="\SDN3Q\Model\Project")
     */
    public $project;
    /**
     * Time of creation
     *
     * @var \DateTime
     * @DataField(name="CreatedAt", type="\DateTime")
     */
    public $createdAt;
    /**
     * Time of last update
     * @var \DateTime
     * @DataField(name="LastUpdatedAt", type="\DateTime")
     */
    public $lastUpdatedAt;
}
