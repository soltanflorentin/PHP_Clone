<?php

$url2='http://api.geonames.org/timezoneJSON?lat=' . $_REQUEST['lat'] . '&lng=' . $_REQUEST['lng'] . '&username=florentin';
$ch2 = curl_init();

curl_setopt($ch2, CURLOPT_URL, $url2);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);

$result2=curl_exec($ch2);
curl_close($ch2);

$decode2 = json_decode($result2, true);
header('Content-Type: application/json; charset=UTF-8');
echo json_encode($decode2);  

 ?>