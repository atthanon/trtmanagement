<?php


$access_token = 'CzCg21Q+yFnjiWTWWHAins8ZCKSL7H3tlg4X60vYbqGoEAA0MGOiWKB3sWWH2jA6hxQxCcyiG4cAcQkZSSxkv/hkoA47Xvu3LoXSe4Ug3l9k/KefwC4wEFf5UUOKlQgYkjruHJTD4NE98fAlpwJGjAdB04t89/1O/w1cDnyilFU=';

$userId = 'U73a7bfc4a39d7b9241c3810bbcb1de54';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;

