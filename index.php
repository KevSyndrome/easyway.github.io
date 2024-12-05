<?php
require_once 'vendor/autoload.php';

$clientID = '805355636731-0rfjsddt4b68a41d1ta0hg5av5klmkjk.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/EASYWAY/html/mapa.php';

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope('email');
$client->addScope('profile');
