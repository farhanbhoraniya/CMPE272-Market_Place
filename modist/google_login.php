<?php
 session_start();
//index.php

//Include Configuration File
include('config.php');
include('redirect.php');


//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"])){
    // echo "if";
    try {
        // Get the access token 
        $data = GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);

        // Access Token
        $access_token = $data['access_token'];
        
        // Get user information
        $user_info = GetUserProfileInfo($access_token);
    }
    catch(Exception $e) {
        echo $e->getMessage();
        // echo "error";
        exit();
    }
}

$_SESSION['name'] = $user_info['name'];
$_SESSION['email'] = $user_info['email'];
header("location: index.php");


?>