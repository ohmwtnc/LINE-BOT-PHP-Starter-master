<?php
$access_token = 'B/axPS4KeXTcKR2FWrtTe7yZJ1AeV031sHvHVgNb8MCPSwGR+rLCBkKHZAhldJ8eSlPN7ZB+/coZfSXushe2VRblvKUa6WbH3PENC31dGFioBCFBQLIs/xhCw78oRXF8Tfp0eLMoqxMUzOdfDiwY1wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
