<?php

namespace SDN3Q\Model;

class FileFormat extends BaseModel {

	/**
	 * FileFormatId
	 *
	 * @var int
	 * @JsonField(name="FileFormatId", type="int")
	 */
	public $fileFormatId;
	/**
	 * Title
	 *
	 * @var string
	 * @JsonField(name="Label", type="string")
	 */
	public $label;

	/**
	 * MIMEType
	 *
	 * @var string
	 * @JsonField(name="MIME-Type", type="string")
	 */
	public $mimeType;

	/**
	 * VideoCodec
	 *
	 * @var string
	 * @JsonField(name="VideoCodec", type="string")
	 */
	public $videoCodec;

	/**
	 * VideoHeight
	 *
	 * @var int
	 * @JsonField(name="VideoHeight", type="int")
	 */
	public $videoHeight;

}