<?php
namespace SDN3Q\Request\Files;
use SDN3Q\Model\FileOutputURI;
use SDN3Q\Request\BaseRequest;
use MintWare\JOM\ObjectMapper;

class Output extends BaseRequest{
	protected static $endpoint ='projects';

	/**
	 * Return Output URIs of a file
	 *
	 * @param int $projectId
	 * @param int $fileId
	 *
	 * @return FileOutputURI[]|null
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public static function getOutput(int $projectId,int $fileId){

      $fileOutputURIs = [];
      parent::$subUrl    =  $projectId .'/files/'.$fileId . '/output';
      try {
         $mapper   = new ObjectMapper();
         $response = self::getResponse();
         $data     = json_decode($response, true);
         if (count($data) > 0) {
            foreach ($data as $dataOutput) {
               $fileOutputURIs[] = $mapper->mapJson(json_encode($dataOutput), FileOutputURI::class);
            }
         }
      } catch (\Exception $e) {
         throw $e;
      }


      return $fileOutputURIs;


	}
}
