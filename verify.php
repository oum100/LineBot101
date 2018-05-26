<?php
$access_token = 'fSOyL14fXMJxeXLhYCXMCOXHIP2+5+IPJjXtxou8VcxvAg4uEq/ouSwXmRj3PuMW6Ho8Fb0ZZLOxe89LMMQ2zyQtrWLtMU4gfG9KzCeB7kKqm+PkWMieMclvCQ/dTAPXMmqG1847TGifhatzhyOG3wdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
