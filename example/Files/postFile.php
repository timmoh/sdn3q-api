<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Client($api_key);

try {
   $request = new \SDN3Q\Request\Files\Files($client);
	$fileId = $request::postFile(7977,__DIR__.'../SampleVideo_1280x720_1mb.mp4','mp4');
	print_r($fileId);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}

