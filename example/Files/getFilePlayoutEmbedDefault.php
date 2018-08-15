<?php

include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Client($api_key);

try {
	$request = new \SDN3Q\Request\Files\Playout($client);
	$parm = ['Width'=>999];
	$embed   = $request::getPlayoutDefault(8163, 979093,$parm);
	print_r($embed);
} catch (\Exception $e) {
	echo "Error: " . $e->getMessage() . '(' . $e->getCode() . ')';
}

