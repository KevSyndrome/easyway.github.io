<?php
require_once 'vendor/autoload.php'; // Asegúrate de instalar Google API PHP Client con Composer.

session_start();

$clientID = 'TU_CLIENT_ID_DE_GOOGLE';
$clientSecret = 'TU_CLIENT_SECRET_DE_GOOGLE';
$redirectUri = 'http://localhost/google-callback.php';

// Configuración del cliente Google
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope('email');
$client->addScope('profile');
?>
