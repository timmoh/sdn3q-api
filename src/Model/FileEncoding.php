<?php
namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class FileEncoding extends BaseModel
{


    /**
     * Activate encoding
     * @var boolean
     * @DataField(name="UseEncoding", type="boolean")
     */
    public $useEncoding;


    /**
     * Activate premium encoding for this project (additional costs)
     * @var boolean
     * @DataField(name="UsePremiumEncoding", type="boolean")
     */
    public $usePremiumEncoding;


    /**
     * Activate Pipeline
     * @var boolean
     * @DataField(name="UsePreProcessing", type="boolean")
     */
    public $usePreProcessing;

    /**
     * Deinterlace during Encoding
     * @var boolean
     * @DataField(name="UseDeinterlace", type="boolean")
     */
    public $useDeinterlace;


    /**
     * Activate Two Pass Encoding
     * @var boolean
     * @DataField(name="UseTwoPass", type="boolean")
     */
    public $useTwoPass;

    /**
     * Keep Original Frame Rate (Recommended)
     * @var boolean
     * @DataField(name="Expires", type="boolean")
     */
    public $useBPFrames;

    /**
     * Package the Files for DRM
     * @var boolean
     * @DataField(name="PackageForDRM", type="boolean")
     */
    public $packageForDrm;

    /**
     * Use Watermark
     * @var boolean
     * @DataField(name="UseWatermark", type="boolean")
     */
    public $useWatermark;


    /**
     * Watermark Picture URI
     *
     * @var string
     * @DataField(name="WatermarkURI", type="string")
     */
    public $watermarkUri;


    /**
     * Position of Watermark
     *
     * @var string
     * @DataField(name="WatermarkPosition", type="string")
     */
    public $watermarkPosition;

    /**
     * Position of Watermark
     *
     * @var array
     * @DataField(name="FileFormats", type="array")
     */
    public $fileFormats = [];
}
