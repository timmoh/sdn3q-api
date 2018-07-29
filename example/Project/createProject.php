<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Request\Projects\Projects($api_key);

$label = 'ss';
$streamType = \SDN3Q\Enum\StreamType::VideoPlatform;

try {
	$project = $client::postProject($label,$streamType);

	print_r($project);
} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}
