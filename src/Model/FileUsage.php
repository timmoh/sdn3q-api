<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;

class FileUsage extends BaseModel {

    /**
     * @var string
     * @DataField(name="TotalBytes", type="string")
     */
    public $totalBytes;

	/**
	 * @var \SDN3Q\Model\BandwidthData[]
	 * @DataField(name="Data", type="\SDN3Q\Model\BandwidthData[]")
	 */
	public $data;

}






