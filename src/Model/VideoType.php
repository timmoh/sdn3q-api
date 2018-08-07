<?php

namespace SDN3Q\Model;
use MintWare\JOM\JsonField;

class VideoType {
   /**
    * Videotype Id
    *
    * @var int
    * @JsonField(name="Id", type="int")
    */
   public $id;

   /**
    * Videotype Label
    *
    * @var string
    * @JsonField(name="Label", type="string")
    */
   public $label;
}