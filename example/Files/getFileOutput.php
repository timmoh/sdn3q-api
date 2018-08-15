<?php

include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Client($api_key);

try {
	$request  = new \SDN3Q\Request\Files\Output($client);
	$output = $request::getOutput(8163, 979093);
	print_r($output);
} catch (\Exception $e) {
	echo "Error: " . $e->getMessage() . '(' . $e->getCode() . ')';
}

