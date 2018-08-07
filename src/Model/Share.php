<?php

namespace SDN3Q\Model;
use MintWare\JOM\JsonField;


class Share extends BaseModel {
   /**
    * Share Id
    *
    * @var integer
    * @JsonField(name="Id", type="integer")
    */
   public $id;

   /**
    * Feed Label for internal use
    *
    * @var string
    * @JsonField(name="Label", type="string")
    */
   public $label;

   /**
    * Key for the Feed URI
    *
    * @var string
    * @JsonField(name="AccessKey", type="string")
    */
   public $accessKey;
}