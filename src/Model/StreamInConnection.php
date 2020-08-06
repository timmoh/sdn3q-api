<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;

class StreamInConnection extends BaseModel {
   /**
    * ServerURI
    *
    * @var mixed
    * @DataField(name="ServerURI")
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
    * @DataField(name="srtPassword", type="string")
    */
   public $streamName;
}
