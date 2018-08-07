<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';


$client = new \SDN3Q\Client($api_key);
$request = new \SDN3Q\Request\Channels\Input($client);

try {
	$input = $request::changeInput(4703,\SDN3Q\Enum\StreamInType::MPEGTS);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}

