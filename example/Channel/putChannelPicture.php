<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Request\Channels\Picture($api_key);

try {
	$channelPicture = $client::putPicture(4703,__DIR__ .'/channelPic.jpg');
	print_r($channelPicture);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}

