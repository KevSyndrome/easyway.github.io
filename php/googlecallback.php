<?php
require_once 'google-config.php';

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (!isset($token['error'])) {
        $client->setAccessToken($token['access_token']);

        // Obtener la información del perfil del usuario
        $google_service = new Google_Service_Oauth2($client);
        $data = $google_service->userinfo->get();

        // Puedes guardar la información del usuario en tu base de datos
        $email = $data['email'];
        $name = $data['name'];
        $picture = $data['picture'];

        // Por ejemplo: guardar en sesión y redirigir al mapa
        $_SESSION['user_email'] = $email;
        $_SESSION['user_name'] = $name;
        $_SESSION['user_picture'] = $picture;

        // Redirigir al mapa o página principal
        header('Location: mapa.html');
        exit();
    } else {
        echo "Error al autenticar con Google.";
    }
} else {
    echo "Código de autenticación no recibido.";
}
?>
