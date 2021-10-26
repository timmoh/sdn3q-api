<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class TimeshiftWindow extends BaseModel
{

	/**
	 * @var \SDN3Q\Model\TimeshiftWindowDimensions
	 * @DataField(name="TimeshiftWindowDimensions", type="\SDN3Q\Model\TimeshiftWindowDimensions")
	 */
	public $dimensions;

	/**
	 * @var \SDN3Q\Model\TimeshiftWindowDimensions[]
	 * @DataField(name="TimeshiftWindowDimensionsHistory", type="\SDN3Q\Model\TimeshiftWindowDimensions[]")
	 */
	public $dimensionsHistory;

}
