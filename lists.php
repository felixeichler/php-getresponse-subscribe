<?php

//CONFIG
//api key for getresponse
$api_key = 'YOUR-API-KEY';

//connect to getresponse api
require_once 'jsonRPCClient.php';
$get_response_url = 'http://api2.getresponse.com';
$client = new jsonRPCClient($get_response_url);

//calling get_campaigns()
$result = $client->get_campaigns($api_key);
foreach ($result as $key => $value) {
    print $value['name'].": ".$key."\n";
}