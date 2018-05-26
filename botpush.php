<?php



require "vendor/autoload.php";

$access_token = 'fSOyL14fXMJxeXLhYCXMCOXHIP2+5+IPJjXtxou8VcxvAg4uEq/ouSwXmRj3PuMW6Ho8Fb0ZZLOxe89LMMQ2zyQtrWLtMU4gfG9KzCeB7kKqm+PkWMieMclvCQ/dTAPXMmqG1847TGifhatzhyOG3wdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a514508da095ea6048e681b832f6c0c8';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







