<?php

ini_set('display_errors', 'On');
	error_reporting(E_ALL);

$executionStartTime = microtime(true);
$url='http://api.geonames.org/countryInfoJSON?formatted=true&lang=en&country=' . $_REQUEST['country'] . '&username=florentin&style=full';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result=curl_exec($ch);
curl_close($ch);

$decode = json_decode($result, true);
$output['data'] = $decode['geonames'];
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($output);  

?>
