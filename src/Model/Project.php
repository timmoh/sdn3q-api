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
	public $streamType;

	/**
	 *
	 * @var \SDN3Q\Model\Category
	 * @JsonField(type="\SDN3Q\Model\Category")
	 */
	public $category;

	/**
	 * Title
	 *
	 * @var string
	 * @JsonField(name="Label", type="string")
	 */
	public $label;

	/**
	 * Project SecurityKey
	 *
	 * @var string
	 * @JsonField(name="SecurityKey", type="string")
	 */
	public $securityKey;


	/**
	 * URI of the Project Thumbnail
	 *
	 * @var string
	 * @JsonField(name="ThumbURI", type="string")
	 */
	public $thumbUri;

	/**
	 * Time of creation
	 *
	 * @var \DateTime
	 * @JsonField(name="CreatedAt", type="\DateTime")
	 */
	public $createdAt;

	/**
	 * Time of Last Update
	 *
	 * @var \DateTime
	 * @JsonField(name="LastUpdatedAt", type="\DateTime")
	 */
	public $lastUpdatedAt;

	/**
	 * expires enabled
	 * @var boolean
	 * @JsonField(name="Expires", type="boolean")
	 */
	public $expires;

	/**
	 * Time of expires
	 *
	 * @var \DateTime
	 * @JsonField(name="ExpiresAt", type="\DateTime")
	 */
	public $expiresAt;
}






