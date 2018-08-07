<?php
namespace SDN3Q\Request\Files;
use SDN3Q\Request\BaseRequest;
use MintWare\JOM\ObjectMapper;
/*

GET /api/v2/projects/{ProjectId}/files/{FileId}/output Return Output URIs of a file
*/
class Output extends BaseRequest{
	protected static $endpoint ='projects';
	
	public static function getOutput(int $projectId,int $fileId){
      throw new \SDN3Q\Exception\NotImplemented();

      $fileOutputURIs = [];
      parent::$subUrl    =  $projectId .'/files/'.$fileId . '/output';
      try {
         $mapper   = new ObjectMapper();
         $response = self::getResponse();
         $data     = json_decode($response, true);

         if (count($data) > 0) {
            foreach ($data as $dataOutput) {
               $fileOutputURIs[] = $mapper->mapJson(json_encode($dataOutput), FileOutput::class);
            }
         }
      } catch (\Exception $e) {
         throw $e;
      }


      return $fileOutputURIs;


	}
}
