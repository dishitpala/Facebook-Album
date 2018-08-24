<?php
require_once __DIR__ . '/../../facebook/configuration.php';
require_once __DIR__ . '/../../facebook/functions.php';
require_once 'configuration.php';


function getGoogleUrl(){
	global $googledrive;
	return $googledrive->easy_login();
}

?>