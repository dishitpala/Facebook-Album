<?php
if(!session_id()){
    session_start();
}
require_once __DIR__ .'/../../configuration.php';
require_once("easy_facebook.php"); 


$dotenv = new Dotenv\Dotenv(CREDENTIALS,"credentials.env");
$dotenv->load();

/*
 * Configuration and setup Facebook SDK
 */
$facebook = new easy_facebook(array(
    'app_id' => getenv('FACEBOOK_APPID'), //Facebook App ID
    'app_secret' => getenv('FACEBOOK_APPSECRET'), //Facebook App Secret
    'default_graph_version' => getenv('FACEBOOK_GRAPH-V'), //Graph version
));
$facebook -> permissions(['user_photos']); //permission must be in array
$facebook -> easy_redirect('https://dishitpala.herokuapp.com/index.php'); //url in which page redirect after login
//$facebook -> easy_redirect('https://localhost/facebook/index.php'); //url in which page redirect after login
$facebook -> easy_token();

//$facebook -> logout('config.php');
?>