<?php

namespace SDN3Q\Model;
use MintWare\JOM\JsonField;

class Category extends BaseModel {
	/**
	 * Category Id
	 * @var int
	 * @JsonField(name="Id", type="int")
	 */
	public $id;

	/**
	 * Title
	 *
	 * @var string
	 * @JsonField(name="Label", type="string")
	 */
	public $label;


	/**
	 * Custom Catagory Id
	 *
	 * @var int
	 * @JsonField(name="CustomId", type="int")
	 */
	public $customId;
	/**
	 * URI of the Project Thumbnail
	 *
	 * @var string
	 * @JsonField(name="ThumbURI", type="string")
	 */
	public $thumbUri;
}