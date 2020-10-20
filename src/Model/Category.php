<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class Category extends BaseModel
{
    /**
     * Category Id
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
     * Custom Catagory Id
     *
     * @var int
     * @DataField(name="CustomId", type="int")
     */
    public $customId;
    /**
     * URI of the Project Thumbnail
     *
     * @var string
     * @DataField(name="ThumbURI", type="string")
     */
    public $thumbUri;
}
