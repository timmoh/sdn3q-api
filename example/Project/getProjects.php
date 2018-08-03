<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';


$client = new \SDN3Q\Client($api_key);
$request = new \SDN3Q\Request\Projects\Projects($client);


$projects = $request::getProjects();

foreach ($projects AS $project){
	print_r($project);
}

