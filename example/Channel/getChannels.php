<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';


$client = new \SDN3Q\Client($api_key);
$request = new \SDN3Q\Request\Channels\Channels( $client );

try {
	$channels = $request::getChannels();

	foreach ( $channels AS $channel ) {
		print_r( $channel );
	}

} catch ( \Exception $e ) {
	echo "Error: " . $e->getMessage() . '(' . $e->getCode() . ')';
}

