<?php

namespace SDN3Q\Model;

class FileFormat extends BaseModel {

	/**
	 * FileFormatId
	 *
	 * @var int
	 * @JsonField(name="FileFormatId", type="int")
	 */
	public $FileFormatId;
	/**
	 * Title
	 *
	 * @var string
	 * @JsonField(name="Label", type="string")
	 */
	public $Label;

	/**
	 * MIMEType
	 *
	 * @var string
	 * @JsonField(name="MIME-Type", type="string")
	 */
	public $MIMEType;

	/**
	 * VideoCodec
	 *
	 * @var string
	 * @JsonField(name="VideoCodec", type="string")
	 */
	public $VideoCodec;

	/**
	 * VideoHeight
	 *
	 * @var int
	 * @JsonField(name="VideoHeight", type="int")
	 */
	public $VideoHeight;

}