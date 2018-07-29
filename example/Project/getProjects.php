<?php


include_once __DIR__ . '/../../vendor/autoload.php';
include_once __DIR__ . '/../apikey.php';

$client = new \SDN3Q\Request\Projects\Projects($api_key);


$projects = $client::getProjects();

foreach ($projects AS $project){
	print_r($project);
}

