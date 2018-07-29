<?php

namespace SDN3Q\Model;

class FilePicture extends BaseModel {

	/**
	 * FilePictureId
	 *
	 * @var int
	 * @JsonField(name="FilePictureId", type="int")
	 */
	public $FilePictureId;

	/**
	 * URI of FilePicture
	 *
	 * @var string
	 * @JsonField(name="URI", type="string")
	 */
	public $URI;


	/**
	 * URI of a small version from the FilePicture
	 *
	 * @var string
	 * @JsonField(name="ThumbURI", type="string")
	 */
	public $ThumbURI;

	/**
	 * If FilePicture was uploaded, that is the URI of the uploaded Picture
	 *
	 * @var string
	 * @JsonField(name="SrcPictureURI", type="string")
	 */
	public $SrcPictureURI;


	/**
	 * This is the Standard (default) FilePicture
	 *
	 * @var string
	 * @JsonField(name="IsStandard", type="boolean")
	 */
	public $IsStandard;


}