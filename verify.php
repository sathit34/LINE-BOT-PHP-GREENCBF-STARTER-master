<?php
$access_token = 'cmNWCPo+wzwC31jFYBgctzZ8hwNzAv+22WE6hC3agpA1LF/2L/i8qXBTfpw/0uWqCczVZqzU+olQl+W32u6Ib1ItEVPect35SMp8uRFS9c5riG+6yZVT8mordN+Noduqx+QSj+bx0m9GzdCrC9PDxgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
