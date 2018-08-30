<?php
require_once '../includes/facebook/configuration.php';
require_once '../includes/facebook/easy_facebook.php';


if(isset($_GET['logout'])){
    if($_GET['logout']=='true'){
		$url = 'https://www.facebook.com/logout.php?next=' . $_SERVER['SERVER_NAME'] .'&access_token='.$_SESSION['Facebook_Token'];
		session_destroy();
		header('location:../index.php');  
    }
}
?>