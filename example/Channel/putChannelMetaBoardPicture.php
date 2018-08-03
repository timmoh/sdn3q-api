<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';


$client = new \SDN3Q\Client($api_key);
$request = new \SDN3Q\Request\Channels\Metadata( $client );

try {
	$channelMeta = $request::putBoardPicture( 4703, __DIR__ . '/channelPic.jpg' );
	print_r( $channelMeta );
} catch ( \Exception $e ) {
	echo "Error: " . $e->getMessage() . '(' . $e->getCode() . ')';
}

