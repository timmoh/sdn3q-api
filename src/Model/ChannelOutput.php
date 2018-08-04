<?php


namespace SDN3Q\Model;
use MintWare\JOM\JsonField;


class ChannelOutput extends BaseModel {


	/**
	 * SourceOutput
	 *
	 * @var \SDN3Q\Model\Output\SourceOutput
	 * @JsonField(name="SourceOutput",type="\SDN3Q\Model\Output\SourceOutput")
	 */
	public $sourceOutput;


   /**
    * MBROutput
    *
    * @var \SDN3Q\Model\Output\MBROutput
    * @JsonField(name="MBROutput",type="\SDN3Q\Model\Output\MBROutput")
    */
   public $mbrOutput;

   /**
    * TranscoderOutput
    *
    * @var \SDN3Q\Model\Output\TranscoderOutput
    * @JsonField(name="TranscoderOutput",type="\SDN3Q\Model\Output\TranscoderOutput")
    */
   public $transcoderOutput;


}