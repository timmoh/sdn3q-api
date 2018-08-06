<?php

namespace SDN3Q\Model;
use MintWare\JOM\JsonField;

class StreamInConnection extends BaseModel {
   /**
    * ServerURI
    *
    * @var string
    * @JsonField(name="ServerURI", type="string")
    */
   public $serverURI;

   /**
    * BackupServerURI
    *
    * @var string
    * @JsonField(name="BackupServerURI", type="string")
    */
   public $backupServerURI;

   /**
    * StreamName
    *
    * @var string
    * @JsonField(name="StreamName", type="string")
    */
   public $streamName;
}