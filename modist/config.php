<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('858439025236-a6jipe1spu0ut6maja04f5591fbob9je.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('qJuGzBm7ABAMkZZe3K85JXHp');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://www.marketplace.manavrajvanshi.com');

$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
