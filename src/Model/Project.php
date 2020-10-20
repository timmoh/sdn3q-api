<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class Project extends BaseModel
{
    /**
     * @var int
     * @DataField(name="Id", type="int")
     */
    public $id;

    /**
     *
     * @var \SDN3Q\Model\StreamType
     * @DataField(name="StreamType", type="\SDN3Q\Model\StreamType")
     */
    public $streamType;

    /**
     *
     * @var \SDN3Q\Model\Category
     * @DataField(name="Category", type="\SDN3Q\Model\Category")
     */
    public $category;

    /**
     * Title
     *
     * @var string
     * @DataField(name="Label", type="string")
     */
    public $label;

    /**
     * Project SecurityKey
     *
     * @var string
     * @DataField(name="SecurityKey", type="string")
     */
    public $securityKey;


    /**
     * URI of the Project Thumbnail
     *
     * @var string
     * @DataField(name="ThumbURI", type="string")
     */
    public $thumbUri;

    /**
     * Time of creation
     *
     * @var \DateTime
     * @DataField(name="CreatedAt", type="\DateTime")
     */
    public $createdAt;

    /**
     * Time of Last Update
     *
     * @var \DateTime
     * @DataField(name="LastUpdatedAt", type="\DateTime")
     */
    public $lastUpdatedAt;

    /**
     * expires enabled
     * @var boolean
     * @DataField(name="Expires", type="boolean")
     */
    public $expires;

    /**
     * Time of expires
     *
     * @var \DateTime
     * @DataField(name="ExpiresAt", type="\DateTime")
     */
    public $expiresAt;
}
