<?php

include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Client($api_key);

try {
	$request = new \SDN3Q\Request\Files\Metadata($client);
	$files   = $request::getMetadata(7977, 981075);
	print_r($files);
} catch (\Exception $e) {
	echo "Error: " . $e->getMessage() . '(' . $e->getCode() . ')';
}

