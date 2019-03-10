<?php


namespace SDN3Q\Model;
use MintWare\DMM\DataField;


class ChannelOutput extends BaseModel {


	/**
	 * SourceOutput
	 *
	 * @var \SDN3Q\Model\Output\SourceOutput
	 * @DataField(name="SourceOutput",type="\SDN3Q\Model\Output\SourceOutput")
	 */
	public $sourceOutput;


   /**
    * MBROutput
    *
    * @var \SDN3Q\Model\Output\MBROutput
    * @DataField(name="MBROutput",type="\SDN3Q\Model\Output\MBROutput")
    */
   public $mbrOutput;

   /**
    * TranscoderOutput
    *
    * @var \SDN3Q\Model\Output\TranscoderOutput
    * @DataField(name="TranscoderOutput",type="\SDN3Q\Model\Output\TranscoderOutput")
    */
   public $transcoderOutput;


}