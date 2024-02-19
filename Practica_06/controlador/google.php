use Google\Client as Google_Client; // Add this line
<?php
// Sergi Sanahuja
    $idClient = '4351398941-gt49q5use30gnsutae49d1g1a7nb30kr.apps.googleusercontent.com';
    $idSecretClient = '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';

    //start session on web page
    session_start();

    //config.php

    //Include Google Client Library for PHP autoload file
    require_once '../vendor/autoload.php';

    //Make object of Google API Client for call Google API
    $google_client = new Google_Client();

    //Set the OAuth 2.0 Client ID
    $google_client->setClientId($idClient);

    //Set the OAuth 2.0 Client Secret key
    $google_client->setClientSecret($idSecretClient);

    //Set the OAuth 2.0 Redirect URI
    $google_client->setRedirectUri('https://localhost/Backend/Practiques/Practica_06/vista/login.index.vista.php');

    // to get the email and profile 
    $google_client->addScope('email');

    $google_client->addScope('profile');


?>