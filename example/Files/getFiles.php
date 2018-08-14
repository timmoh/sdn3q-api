<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Client($api_key);

try {
   $request = new \SDN3Q\Request\Files\Files($client);
	$files = $request::getFiles(7977);
	print_r($files);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}

