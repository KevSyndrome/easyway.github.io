<?php
require_once 'config.php';

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (!isset($token['error'])) {
        $client->setAccessToken($token['access_token']);
        
        // Obteniendo información del perfil del usuario
        $googleService = new Google_Service_Oauth2($client);
        $data = $googleService->userinfo->get();

        // Procesar la información del usuario
        $email = $data['email'];
        $name = $data['name'];

        // Puedes guardar esta información en tu base de datos
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;

        header('Location: /html/mapa.php');
        exit;
    }
}
