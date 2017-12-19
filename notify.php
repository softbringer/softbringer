<?php
$access_token = 'sMMbQLWQKpi8mkkoKs1mZq6nUMqiaN0fQZKUrsMyzwZUWewlTsDNl4Nw3jWtnSu90UcWQx+A68+BUdQDYsrTWv7G+hGce4kz3U1Arc4Ig7kWBzVrhDaeuLz0SFGLAQ5JOSeSE43+fCmK/x12l8LHGgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
