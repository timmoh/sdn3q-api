<?php

namespace SDN3Q\Model;
use MintWare\JOM\JsonField;

class StreamType {
	/**
	 * @var int
	 * @JsonField(name="Id", type="int")
	 */
	public $id;

	/**
	 * Title
	 *
	 * @var string
	 * @JsonField(name="Label", type="string")
	 */
	public $label;
}