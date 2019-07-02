<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class File extends BaseModel {

	/**
	 * File Id
	 *
	 * @var integer
	 * @DataField(name="Id", type="integer|string")
	 * @DataField(name="FileId", type="integer|string")
	 */
	public $id;

	/**
	 * File Name
	 *
	 * @var string
	 * @DataField(name="Name", type="string")
	 */
	public $name;

	/**
	 * Is Video processing (e.g. encoding) finished and Video is usable
	 *
	 * @var boolean
	 * @DataField(name="IsFinished", type="boolean")
	 */
	public $isFinished;

	/**
	 * URI of FilePicture
	 *
	 * @var string
	 * @DataField(name="URI", type="string")
	 */
	public $uri;

	/**
	 * Properties
	 *
	 * @var \SDN3Q\Model\FileProperties
	 * @DataField(name="Properties", type="\SDN3Q\Model\FileProperties")
	 */
	public $properties;

	/**
	 * Metadata
	 *
	 * @var \SDN3Q\Model\FileMetadata
	 * @DataField(name="Metadata", type="\SDN3Q\Model\FileMetadata")
	 */
	public $metadata;

	/**
	 * Creation Datetime
	 *
	 * @var \Datetime
	 * @DataField(name="CreatedAt", type="\Datetime")
	 */
	public $createdAt;

	/**
	 * Last update Datetime
	 *
	 * @var \Datetime
	 * @DataField(name="LastUpdateAt", type="\Datetime")
	 */
	public $lastUpdateAt;

	/**
	 * Is Video marked as deleted (IsEnabled=false)
	 *
	 * @var boolean
	 * @DataField(name="IsEnabled", type="boolean")
	 */
	public $isEnabled;

	/**
	 * upload url
	 *
	 * @var null|string
	 */
	public $uploadUrl = null;

}