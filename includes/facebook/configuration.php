<?php
if(!session_id()){
    session_start();
}
require_once("easy_facebook.php"); 
/*
 * Configuration and setup Facebook SDK
 */
$facebook = new easy_facebook(array(
    'app_id' => '{}', //Facebook App ID
    'app_secret' => '{}', //Facebook App Secret
    'default_graph_version' => '{}', //Graph version
));
$facebook -> permissions(['user_photos']); //permission must be in array
$facebook -> easy_redirect('{}'); //url in which page redirect after login
$facebook -> easy_token();

?>