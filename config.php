<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID | Copiar "ID DE CLIENTE"
$google_client->setClientId('1005806180999-nine5u3spothf7siea0ncqnhih5fu5s7.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('GGOCSPX-3iEdISihGV_EAr4w7Fyo_ROYEIi7');

//Set the OAuth 2.0 Redirect URI | URL AUTORIZADO
$google_client->setRedirectUri('http://localhost/Login-con-la-API-de-google-master/web1.html');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>