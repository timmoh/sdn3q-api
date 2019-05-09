<?php


include_once __DIR__ . '/../../../vendor/autoload.php';
include_once __DIR__ . '/../../apikey.php';


$client = new \SDN3Q\Client($api_key);
$request = new \SDN3Q\Request\Channels\Distribution($client);

try {
	$distributions = $request::getDistributions();
	print_r($distributions);
} catch ( \Exception $e ) {
	echo "Error: " . $e->getMessage() . "(" . $e->getCode() . ")";
}

