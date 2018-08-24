<?php
require_once '../facebook/configuration.php';
require_once '../facebook/functions.php';
require_once '../google/bucket/configuration.php';
require_once '../google/bucket/easy_bucket.php';


ini_set('max_execution_time', 300);

if(isset($_GET['albumid'])){
	$albumid = $_GET['albumid'];
	
		$albumPictures = getAlbumPictures($_GET['albumid']);

		$zip = new ZipArchive();
		$zip_name = $_GET['name'].".zip";
		$index = 0;
		if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE)  
		{   
			// Opening zip file to load files  
			$error .= "* Sorry ZIP creation failed at this time";  
			echo $error;
		}
		foreach($albumPictures['source'] as $pictures){
			$index++;
			$photo = file_get_contents($pictures);
			$zip->addFromString($index.".jpg",$photo);
		}
		$zip->close();
		
		uploadToBucket($_SESSION['Facebook_Id'],$_GET['name']);
		
		echo $albumid.'-'.$_GET['name'];
	
}
 
?>