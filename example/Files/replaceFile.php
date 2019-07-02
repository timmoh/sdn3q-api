<?php

use SDN3Q\Enum\FileFormat;

include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Client($api_key);

try {
	$request = new \SDN3Q\Request\Files\Files($client);
	$file  = $request::postFile(9139, __DIR__ . '/../SampleVideo_1280x720_1mb.mp4', FileFormat::MP4);

	$request = new \SDN3Q\Request\Files\Files($client);
	$file  = $request::replaceFile(9139, $file->id,__DIR__ . '/../SampleVideo_1280x720_1mb.mp4', FileFormat::MP4);
	print_r($file);
} catch (\Exception $e) {
	echo "Error: " . $e->getMessage() . '(' . $e->getCode() . ')';
}

