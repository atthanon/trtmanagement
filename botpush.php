<?php



require "vendor/autoload.php";

$access_token = 'CzCg21Q+yFnjiWTWWHAins8ZCKSL7H3tlg4X60vYbqGoEAA0MGOiWKB3sWWH2jA6hxQxCcyiG4cAcQkZSSxkv/hkoA47Xvu3LoXSe4Ug3l9k/KefwC4wEFf5UUOKlQgYkjruHJTD4NE98fAlpwJGjAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'f3660b07bde5681601d94d5cc2d31401';

$pushID = 'U73a7bfc4a39d7b9241c3810bbcb1de54';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







