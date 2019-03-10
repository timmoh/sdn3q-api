<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;


class FilePicture extends BaseModel {

	/**
	 * FilePictureId
	 *
	 * @var int
	 * @DataField(name="FilePictureId", type="int")
	 */
	public $filePictureId;

	/**
	 * URI of FilePicture
	 *
	 * @var string
	 * @DataField(name="URI", type="string")
	 */
	public $uri;


	/**
	 * URI of a small version from the FilePicture
	 *
	 * @var string
	 * @DataField(name="ThumbURI", type="string")
	 */
	public $thumbUri;

	/**
	 * If FilePicture was uploaded, that is the URI of the uploaded Picture
	 *
	 * @var string
	 * @DataField(name="SrcPictureURI", type="string")
	 */
	public $srcPictureUri;


	/**
	 * This is the Standard (default) FilePicture
	 *
	 * @var boolean
	 * @DataField(name="IsStandard", type="boolean")
	 */
	public $isStandard;


}