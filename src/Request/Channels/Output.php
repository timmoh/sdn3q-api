<?php

namespace SDN3Q\Request\Channels;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Model\ChannelOutput;
use SDN3Q\Request\BaseRequest;


class Output extends BaseRequest {
   protected static $endpoint = 'channels';

   /**
    * Return Output URIs of a Channel
    *
    * @param int $channelId
    *
    * @return ChannelOutput[]
    * @throws \Exception
    */
   public static function getOutput(int $channelId) {
      $channelOutputURIs = [];
      parent::$subUrl    = $channelId . '/output';
      try {
         $mapper   = new ObjectMapper();
         $response = self::getResponse();
         $data     = json_decode($response, true);

         if (count($data) > 0) {
            foreach ($data as $dataOutput) {
               $channelOutputURIs[] = $mapper->mapJson(json_encode($dataOutput), ChannelOutput::class);
            }
         }
      } catch (\Exception $e) {
         throw $e;
      }


      return $channelOutputURIs;
   }
}
