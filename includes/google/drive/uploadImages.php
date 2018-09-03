<?php
require_once __DIR__ . '/../../facebook/configuration.php';
require_once __DIR__ . '/../../facebook/functions.php';
require_once 'configuration.php';


ini_set('max_execution_time', 1200);

if(isset($_GET['albumid'])){
	$albumid = $_GET['albumid'];
	
	$albumPictures = getAlbumPictures($_GET['albumid']);
	
	$parent = $googledrive->easy_createFolder('facebook_'.$_SESSION['Facebook_User'].'_albums');
	$child = $googledrive->easy_createChildFolder($parent,$_GET['name']);
	$childsChild = $googledrive->easy_createChildFolder($child,date('m/d/Y h:i:s a', time()));
	$googledrive->easy_upload($childsChild,$albumPictures['source']);
	
	echo $albumid.'-'.$_GET['name'];
}
 
?>