<?php

//CONFIG
//api key for getresponse
$api_key = 'YOUR-API-KEY';
//campaignID to add contact to (to obtain this id, call lists.php)
$campaignID = 'YOUR-CAMPAIGN-ID';

//connect to getresponse api
require_once 'jsonRPCClient.php';
$get_response_url = 'http://api2.getresponse.com';
$client = new jsonRPCClient($get_response_url);

//calling add_contact()
$result = $client->add_contact(
    $api_key,
    array (
        'campaign'  => $campaignID,
        'email'     => $_POST['email']
    )
);