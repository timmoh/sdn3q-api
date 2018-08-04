<?php


namespace SDN3Q\Model\Output;
use MintWare\JOM\JsonField;
use SDN3Q\Model\BaseModel;


class SourceOutput extends BaseModel {
   /**
    * rtmp
    *
    * @var string
    * @JsonField(name="rtmp", type="string")
    */
   public $rtmp;

   /**
    * hls
    *
    * @var string
    * @JsonField(name="hls", type="string")
    */
   public $hls;

   /**
    * hds
    *
    * @var string
    * @JsonField(name="hds", type="string")
    */
   public $hds;

   /**
    * dash
    *
    * @var string
    * @JsonField(name="StreamInConnection", type="string")
    */
   public $dash;


}
