<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;

class FileUsage extends BaseModel {

    /**
     * @var int
     * @DataField(name="TotalBytes", type="int")
     */
    public $totalBytes = 0;

	/**
	 * @var \SDN3Q\Model\BandwidthData[]
	 * @DataField(name="Data", type="\SDN3Q\Model\BandwidthData[]")
	 */
	public $data;

}






