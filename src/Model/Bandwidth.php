<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;

class Bandwidth extends BaseModel {

	/**
	 * @var \SDN3Q\Model\BandwidthTotals
	 * @DataField(name="Totals", type="\SDN3Q\Model\BandwidthTotals")
	 */
	public $totals;

	/**
	 * @var \SDN3Q\Model\BandwidthData[]
	 * @DataField(name="Data", type="\SDN3Q\Model\BandwidthData[]")
	 */
	public $data;

}






