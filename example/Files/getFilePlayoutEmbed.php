<?php

include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Client($api_key);

try {
	$request = new \SDN3Q\Request\Files\Playout($client);

	$parm = ['Width'=>999];
	$embeds = $request::getPlayout(8163, 979093,'66bff5ba-9c08-11e8-afb7-002590c750be',$parm);
	print_r($embeds);
} catch (\Exception $e) {
	echo "Error: " . $e->getMessage() . '(' . $e->getCode() . ')';
}

