<?php

namespace SDN3Q\Model;

class FilePicture extends BaseModel {

	/**
	 * FilePictureId
	 *
	 * @var int
	 * @JsonField(name="FilePictureId", type="int")
	 */
	public $filePictureId;

	/**
	 * URI of FilePicture
	 *
	 * @var string
	 * @JsonField(name="URI", type="string")
	 */
	public $uri;


	/**
	 * URI of a small version from the FilePicture
	 *
	 * @var string
	 * @JsonField(name="ThumbURI", type="string")
	 */
	public $thumbUri;

	/**
	 * If FilePicture was uploaded, that is the URI of the uploaded Picture
	 *
	 * @var string
	 * @JsonField(name="SrcPictureURI", type="string")
	 */
	public $srcPictureUri;


	/**
	 * This is the Standard (default) FilePicture
	 *
	 * @var string
	 * @JsonField(name="IsStandard", type="boolean")
	 */
	public $isStandard;


}