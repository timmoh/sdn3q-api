<?php


include_once __DIR__ . '/../../../vendor/autoload.php';
include_once __DIR__ . '/../../apikey.php';


$client = new \SDN3Q\Client($api_key);
$request = new \SDN3Q\Request\Channels\Distribution($client);

try {
	$distributions = $request::getDistributions();
	if(count($distributions)>0){
		$lastDistribution = end($distributions);

		$distribution = $request::deleteDistribution($lastDistribution->channel->id,$lastDistribution->id);

		print_r($distribution);


	} else echo "No Distributions";
	print_r($input);
} catch ( \Exception $e ) {
	echo "Error: " . $e->getMessage() . "(" . $e->getCode() . ")";
}

