<?php
namespace SDN3Q\Model;

use MintWare\JOM\JsonField;

class FileEncoding  extends BaseModel{


	/**
	 * Activate encoding
	 * @var boolean
	 * @JsonField(name="UseEncoding", type="boolean")
	 */
	public $UseEncoding;


	/**
	 * Activate premium encoding for this project (additional costs)
	 * @var boolean
	 * @JsonField(name="UsePremiumEncoding", type="boolean")
	 */
	public $UsePremiumEncoding;


	/**
	 * Activate Pipeline
	 * @var boolean
	 * @JsonField(name="UsePreProcessing", type="boolean")
	 */
	public $UsePreProcessing;

	/**
	 * Deinterlace during Encoding
	 * @var boolean
	 * @JsonField(name="UseDeinterlace", type="boolean")
	 */
	public $UseDeinterlace;


	/**
	 * Activate Two Pass Encoding
	 * @var boolean
	 * @JsonField(name="UseTwoPass", type="boolean")
	 */
	public $UseTwoPass;

	/**
	 * Keep Original Frame Rate (Recommended)
	 * @var boolean
	 * @JsonField(name="Expires", type="boolean")
	 */
	public $UseBPFrames;

	/**
	 * Package the Files for DRM
	 * @var boolean
	 * @JsonField(name="PackageForDRM", type="boolean")
	 */
	public $PackageForDRM;

	/**
	 * Use Watermark
	 * @var boolean
	 * @JsonField(name="UseWatermark", type="boolean")
	 */
	public $UseWatermark;


	/**
	 * Watermark Picture URI
	 *
	 * @var string
	 * @JsonField(name="WatermarkURI", type="string")
	 */
	public $WatermarkURI;


	/**
	 * Position of Watermark
	 *
	 * @var string
	 * @JsonField(name="WatermarkPosition", type="string")
	 */
	public $WatermarkPosition;

	/**
	 * Position of Watermark
	 *
	 * @var array
	 * @JsonField(name="FileFormats", type="array")
	 */
	public $FileFormats = [];

}