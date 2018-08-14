<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Client($api_key);

try {
   $request = new \SDN3Q\Request\Files\Files($client);
	$file = $request::getFile(7977,981067);
	print_r($file);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}

