<?php

namespace SDN3Q\Model;

use MintWare\DMM\DataField;

class EmbedCodes extends BaseModel
{

   /**
    * JavaScript
    *
    * @var string
    * @DataField(name="JavaScript", type="string")
    */
    public $javaScript;


    /**
     * iFrame
     *
     * @var string
     * @DataField(name="iFrame", type="string")
     */
    public $iFrame;


    /**
     * PlayerURL
     *
     * @var string
     * @DataField(name="PlayerURL", type="string")
     */
    public $playerURL;

    /**
     * Embed Url
     *
     * @return string
     */
    public function getUuid()
    {
        preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->playerURL, $output_array);
        return $output_array[0];
    }
}
