<?php

namespace SDN3Q\Model;
use MintWare\JOM\JsonField;


class File extends BaseModel {

   /**
    * File Id
    *
    * @var integer
    * @JsonField(name="Id", type="integer")
    */
   public $id;

   /**
    * File Name
    *
    * @var string
    * @JsonField(name="Name", type="string")
    */
   public $name;


   /**
    * Is Video processing (e.g. encoding) finished and Video is usable
    *
    * @var boolean
    * @JsonField(name="IsFinished", type="boolean")
    */
   public $isFinished;

   /**
    * URI of FilePicture
    *
    * @var string
    * @JsonField(name="URI", type="string")
    */
   public $uri;


	/**
	 * Properties
	 *
	 * @var \SDN3Q\Model\FileProperties
	 * @JsonField(name="StandardFilePicture", type="\SDN3Q\Model\FileProperties")
	 */
	public $properties;

   /**
    * Metadata
    *
    * @var \SDN3Q\Model\FileMetadata
    * @JsonField(name="Metadata", type="\SDN3Q\Model\FileMetadata")
    */
   public $metadata;


	/**
	 * Creation Datetime
	 *
	 * @var \Datetime
	 * @JsonField(name="CreatedAt", type="\Datetime")
	 */
	public $createdAt;

   /**
    * Last update Datetime
    *
    * @var \Datetime
    * @JsonField(name="LastUpdateAt", type="\Datetime")
    */
   public $lastUpdateAt;



	/**
	 * Is Video marked as deleted (IsEnabled=false)
	 *
	 * @var boolean
	 * @JsonField(name="IsEnabled", type="boolean")
	 */
	public $isEnabled;



}