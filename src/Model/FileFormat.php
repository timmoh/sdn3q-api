<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class FileFormat extends BaseModel
{

    /**
     * FileFormatId
     *
     * @var int
     * @DataField(name="FileFormatId", type="int")
     */
    public $fileFormatId;
    /**
     * Title
     *
     * @var string
     * @DataField(name="Label", type="string")
     */
    public $label;

    /**
     * MIMEType
     *
     * @var string
     * @DataField(name="MIME-Type", type="string")
     */
    public $mimeType;

    /**
     * VideoCodec
     *
     * @var string
     * @DataField(name="VideoCodec", type="string")
     */
    public $videoCodec;

    /**
     * VideoHeight
     *
     * @var int
     * @DataField(name="VideoHeight", type="int")
     */
    public $videoHeight;
}
