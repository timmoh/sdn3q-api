<?php
namespace SDN3Q\Model;

use MintWare\JOM\JsonField;

class FileEncoding  extends BaseModel{


	/**
	 * Activate encoding
	 * @var boolean
	 * @JsonField(name="UseEncoding", type="boolean")
	 */
	public $useEncoding;


	/**
	 * Activate premium encoding for this project (additional costs)
	 * @var boolean
	 * @JsonField(name="UsePremiumEncoding", type="boolean")
	 */
	public $usePremiumEncoding;


	/**
	 * Activate Pipeline
	 * @var boolean
	 * @JsonField(name="UsePreProcessing", type="boolean")
	 */
	public $usePreProcessing;

	/**
	 * Deinterlace during Encoding
	 * @var boolean
	 * @JsonField(name="UseDeinterlace", type="boolean")
	 */
	public $useDeinterlace;


	/**
	 * Activate Two Pass Encoding
	 * @var boolean
	 * @JsonField(name="UseTwoPass", type="boolean")
	 */
	public $useTwoPass;

	/**
	 * Keep Original Frame Rate (Recommended)
	 * @var boolean
	 * @JsonField(name="Expires", type="boolean")
	 */
	public $useBPFrames;

	/**
	 * Package the Files for DRM
	 * @var boolean
	 * @JsonField(name="PackageForDRM", type="boolean")
	 */
	public $packageForDrm;

	/**
	 * Use Watermark
	 * @var boolean
	 * @JsonField(name="UseWatermark", type="boolean")
	 */
	public $useWatermark;


	/**
	 * Watermark Picture URI
	 *
	 * @var string
	 * @JsonField(name="WatermarkURI", type="string")
	 */
	public $watermarkUri;


	/**
	 * Position of Watermark
	 *
	 * @var string
	 * @JsonField(name="WatermarkPosition", type="string")
	 */
	public $watermarkPosition;

	/**
	 * Position of Watermark
	 *
	 * @var array
	 * @JsonField(name="FileFormats", type="array")
	 */
	public $fileFormats = [];

}