<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;

class StreamInConnection extends BaseModel {
   /**
    * ServerURI
    *
    * @var string
    * @DataField(name="ServerURI", type="string")
    */
   public $serverURI;

   /**
    * BackupServerURI
    *
    * @var string
    * @DataField(name="BackupServerURI", type="string")
    */
   public $backupServerURI;

   /**
    * StreamName
    *
    * @var string
    * @DataField(name="StreamName", type="string")
    */
   public $streamName;
}