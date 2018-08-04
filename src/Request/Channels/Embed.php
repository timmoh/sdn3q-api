<?php

namespace SDN3Q\Request\Channels;

use MintWare\JOM\ObjectMapper;
use SDN3Q\Enum\PlayoutState;
use SDN3Q\Model\ChannelEmbedCodes;
use SDN3Q\Request\BaseRequest;

/*
GET /api/v2/channels/{ChannelId}/embed Return the Embed Codes of a Channel
/api/v2/channels/{ChannelId}/embedstate
GET /api/v2/channels/{ChannelId}/embedstate Return the Playout State of Channels Embed Code
PUT /api/v2/channels/{ChannelId}/embedstate
*/

class Embed extends BaseRequest {
   protected static $endpoint = 'channels';

   /**
    * Return the Embed Codes of a Channel
    *
    *
    * @param int   $channelId
    * @param array $parms
    *
    * @return ChannelEmbedCodes
    * @throws \Exception
    */
   public static function getEmbed(int $channelId, $parms = []) {
      //$channelEmbeds = [];
      self::$requestParmAsJson  = false;
      self::$requestParmAsQuery = true;
      parent::$subUrl           = $channelId . '/embed';
      self::$possibleParm       = [
         'ContainerId', //string ID of player DIV tag
         'Width', //integer		Player width
         'Height', //integer		Player height
         'OverrideSettings', //boolean		Overrides the specified settings by embed code
         'Autostart', //boolean		Start playback automatically
         'Popover', //boolean		Show player as popover
         'ActivateAds', //boolean		Enable advertising
         'VASTID', //integer		AdTag Id
      ];

      foreach ($parms AS $key => $value) {
         self::$requestParm[$key] = $value;
      }

      try {
         $mapper   = new ObjectMapper();
         $response = self::getResponse();

         $data = json_decode($response, true);
         $embed = $mapper->mapJson(json_encode($data['ChannelEmbedCodes']), ChannelEmbedCodes::class);
         return $embed;
         /*
         if (count($data) > 0) {
            foreach ($data as $dataValue) {
               print_r(json_encode($dataValue));
               echo "\n";
               $channelEmbeds[] = $mapper->mapJson(json_encode($dataValue), ChannelEmbedCodes::class);
            }
         }*/

      } catch (\Exception $e) {
         throw $e;
      }


      //return $channelEmbeds;
   }

   /**
    * Return the Playout State of Channels Embed Code
    *
    * @param int $channelId
    *
    * @return mixed
    * @throws \GuzzleHttp\Exception\GuzzleException
    */
   public static function getEmbedState(int $channelId) {
      parent::$subUrl           = $channelId . '/embedstate';
      try {
         $response = self::getResponse();

         $data = json_decode($response, true);

         return constant('SDN3Q\Enum\PlayoutState::'.strtoupper($data['PlayoutState']));
      } catch (\Exception $e) {
         throw $e;
      }
   }

   /**
    * Change Playout State of Channels Embed Code
    * @param int          $channelId
    * @param PlayoutState $playoutState
    *
    * @return mixed
    * @throws \GuzzleHttp\Exception\GuzzleException
    */
   public static function changeEmbedState(int $channelId, PlayoutState $playoutState) {
      parent::$subUrl           = $channelId . '/embedstate';
      self::$possibleParm       = [
         'PlayoutState', //sState of Channel Embed Code
      ];

      try {
         self::$requestParm['PlayoutState'] = $playoutState;
         $response = self::getResponse();
         $data = json_decode($response, true);
         return constant('SDN3Q\Enum\PlayoutState::'.strtoupper($data['PlayoutState']));
      } catch (\Exception $e) {
         throw $e;
      }
   }
}

