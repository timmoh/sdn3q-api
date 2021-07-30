<?php

namespace SDN3Q\Model;
use MintWare\DMM\DataField;

class BandwidthData extends BaseModel {

	/**
	 * @var string
	 * @DataField(name="Date", type="string")
	 */
	public $date;

	/**
	 * @var string
	 * @DataField(name="Bandwidth", type="string")
	 */
	public $bandwidth;

}






