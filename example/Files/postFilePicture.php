<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Client($api_key);

try {
	$request = new \SDN3Q\Request\Files\Picture($client);
	$file = $request::postPicture(7977,981079,__DIR__.'/../SamplePNGImage_100kbmb.png');
	print_r($file);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}

