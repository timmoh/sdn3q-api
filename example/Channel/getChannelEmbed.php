<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';


$client = new \SDN3Q\Client($api_key);
$request = new \SDN3Q\Request\Channels\Embed($client);

try {
	$input = $request::getEmbed(4703);
	print_r($input);
	echo "Uuid:".$input->getUuid()."\n";

   echo "\n";

   $parm = ['ContainerId' => 'test','Height'=>500];
   $input = $request::getEmbed(4703,$parm);
   print_r($input);


} catch ( \Exception $e ) {
	echo "Error: ".$e->getMessage().'('.$e->getCode().')';
}

