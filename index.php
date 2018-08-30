<?php 
require_once 'includes/facebook/configuration.php'; 
require_once 'includes/facebook/functions.php'; 
      
	  
	  
if($facebook->isLoggedIn() == true){
	_id();//session created

	require_once 'includes/google/drive/configuration.php'; 
    require_once 'includes/google/drive/functions.php'; 
    require_once 'includes/google/bucket/configuration.php'; 
    require_once 'includes/google/bucket/easy_bucket.php'; 
    require_once 'includes/google/bucket/functions.php';
    require_once 'templates/photoswipe.ui.php';
    require_once 'templates/confirm.php';
    require_once 'templates/30sec.php';

	
	if($googledrive->isLoggedIn() == true){
		$google_status = 'connected';
	}else{
		$google_status = 'connect to google';
	}

	$facebook_status = 'connected';
	include 'templates/home.php';
	
}else{
	include 'templates/login.php';
}



?>
