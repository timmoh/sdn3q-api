<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';


$client = new \SDN3Q\Client($api_key);
$request = new \SDN3Q\Request\Channels\Output($client);

try {
	$output = $request::getOutput(4703);
	print_r($output);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}

