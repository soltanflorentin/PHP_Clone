<?php

$url3='http://api.geonames.org/searchJSON?formatted=true&q=' . $_REQUEST["q"] . '&maxRows=10&lang=en&username=florentin&style=full';
$ch3 = curl_init();

curl_setopt($ch3, CURLOPT_URL, $url3);
curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);

$result3=curl_exec($ch3);
curl_close($ch3);

$decode3 = json_decode($result3, true);
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($decode3);  

 ?>