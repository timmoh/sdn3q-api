<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Request\Channels\Input($api_key);

try {
	$input = $client::changeInput(4703,\SDN3Q\Enum\StreamInType::HTTPPUSH);
	print_r($input);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}

