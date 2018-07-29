<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Request\Channels\Channels( $api_key );

try {
	$channels = $client::getChannels();

	foreach ( $channels AS $channel ) {
		print_r( $channel );
	}

} catch ( \Exception $e ) {
	echo "Error: " . $e->getMessage() . '(' . $e->getCode() . ')';
}

