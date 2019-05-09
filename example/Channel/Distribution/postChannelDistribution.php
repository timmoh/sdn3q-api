<?php

include_once __DIR__ . '/../../../vendor/autoload.php';
include_once __DIR__ . '/../../apikey.php';

$client = new \SDN3Q\Client($api_key);

$request_channel = new \SDN3Q\Request\Channels\Channels($client);

$request = new \SDN3Q\Request\Channels\Distribution($client);


try {
	$channels = $request_channel::getChannels();
	if (count($channels) > 0) {
		shuffle($channels);
		$lastChannel = end($channels);
		echo "\nChannelId: " . $lastChannel->id . "\n";
		$param = ['Label' => 'Test Distribution', 'ReceiverURL' => 'test', 'ReceiverKey' => 'test'];

		$distribution = $request::postDistribution($lastChannel->id, $param);

		print_r($distribution);

	} else echo "No Channels";
} catch (\Exception $e) {
	echo "Error: " . $e->getMessage() . "(" . $e->getCode() . ")";
}
