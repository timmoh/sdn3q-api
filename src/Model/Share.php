<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;


class Share extends BaseModel {
   /**
    * Share Id
    *
    * @var integer
    * @DataField(name="Id", type="integer")
    */
   public $id;

   /**
    * Feed Label for internal use
    *
    * @var string
    * @DataField(name="Label", type="string")
    */
   public $label;

   /**
    * Key for the Feed URI
    *
    * @var string
    * @DataField(name="AccessKey", type="string")
    */
   public $accessKey;
}