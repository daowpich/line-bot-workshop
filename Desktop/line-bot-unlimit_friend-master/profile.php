<?php


$access_token = '0VffB2uHACCIqUBoNLC/K86so+1oGrRgSiQUddphXsSk7Jhd1GbyiXjftW6E8dKAxwlLwCZ5zd6H+IWEWn/KKoMdHseKHOACmGRjcbVKtP2Spm+hjac0K+77DVYGoEGrnuP/OfsDF2enw6dSHQYpCQdB04t89/1O/w1cDnyilFU=';

$userId = 'Ufe1ad0e4d9727c5fcf6f4e2f82aaa4c7';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

