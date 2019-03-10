<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;

class VideoType {
   /**
    * Videotype Id
    *
    * @var int
    * @DataField(name="Id", type="int")
    */
   public $id;

   /**
    * Videotype Label
    *
    * @var string
    * @DataField(name="Label", type="string")
    */
   public $label;
}