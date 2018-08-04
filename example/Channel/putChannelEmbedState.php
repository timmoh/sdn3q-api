<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';


$client = new \SDN3Q\Client($api_key);
$request = new \SDN3Q\Request\Channels\Embed($client);

try {
	$input = $request::changeEmbedState(4703, \SDN3Q\Enum\PlayoutState::PLAYER);
	print_r($input);


} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}

