<?php
require_once __DIR__ . '/../../facebook/configuration.php';
require_once __DIR__ . '/../../facebook/functions.php';
require_once 'configuration.php';


ini_set('max_execution_time', 300);

if(isset($_GET['albumid'])){
	$albumid = $_GET['albumid'];
	if($_GET['albumid'] == 'uploadAll'){
		$parent = $googledrive->easy_createFolder('facebook_'.$_SESSION['Facebook_User'].'_albums');
		foreach(getAlbums() as $album){
			$albumPictures = getAlbumPictures($album->id);
			$child = $googledrive->easy_createChildFolder($parent,str_replace(' ','_',$albumPictures['name']));
			$childsChild = $googledrive->easy_createChildFolder($child,date('m/d/Y h:i:s a', time()));
			$googledrive->easy_upload($childsChild,$albumPictures['source']);
		}
	}else{
		$ids = explode(",",$_GET['albumid']);
		$parent = $googledrive->easy_createFolder('facebook_'.$_SESSION['Facebook_User'].'_albums');
		foreach($ids as $id){
			$albumPictures = getAlbumPictures($id);
			$child = $googledrive->easy_createChildFolder($parent,str_replace(' ','_',$albumPictures['name']));
			$childsChild = $googledrive->easy_createChildFolder($child,date('m/d/Y h:i:s a', time()));
			$googledrive->easy_upload($childsChild,$albumPictures['source']);
		}
		
	}
	echo $albumid;
}
 
?>