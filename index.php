<?php

$endpoint = 'your/endpoint'; // relative to what setted in $host and $version in MyApi Class

require_once 'api.php';
$my_api = new MyApi('testuser', 'testpassword');

$json_response = $my_api->http($endpoint, 'GET');

if ($response === false) {
    $profile = [ 'status' => false, 'error' => 'CURL_ERR' ];
    exit(print_r($profile));
}else {
    $response = json_decode($json_response);
}

// Use $response ...