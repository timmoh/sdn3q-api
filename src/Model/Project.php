<?php

namespace SDN3Q\Model;
use MintWare\JOM\JsonField;

class Project extends BaseModel {
	/**
	 * @var int
	 * @JsonField(name="Id", type="int")
	 */
	public $id;

	/**
	 *
	 * @var \SDN3Q\Model\StreamType
	 * @JsonField(type="\SDN3Q\Model\StreamType")
	 */
	public $StreamType;

	/**
	 *
	 * @var \SDN3Q\Model\Category
	 * @JsonField(type="\SDN3Q\Model\Category")
	 */
	public $Category;

	/**
	 * Title
	 *
	 * @var string
	 * @JsonField(name="Label", type="string")
	 */
	public $Label;

	/**
	 *    Project SecurityKey
	 *
	 * @var string
	 * @JsonField(name="SecurityKey", type="string")
	 */
	public $SecurityKey;


	/**
	 * URI of the Project Thumbnail
	 *
	 * @var string
	 * @JsonField(name="ThumbURI", type="string")
	 */
	public $ThumbURI;

	/**
	 * Time of creation
	 *
	 * @var \DateTime
	 * @JsonField(name="CreatedAt", type="\DateTime")
	 */
	public $CreatedAt;

	/**
	 * Time of Last Update
	 *
	 * @var \DateTime
	 * @JsonField(name="LastUpdatedAt", type="\DateTime")
	 */
	public $LastUpdatedAt;

	/**
	 * expires enabled
	 * @var boolean
	 * @JsonField(name="Expires", type="boolean")
	 */
	public $Expires;

	/**
	 * Time of expires
	 *
	 * @var \DateTime
	 * @JsonField(name="ExpiresAt", type="\DateTime")
	 */
	public $ExpiresAt;
}






