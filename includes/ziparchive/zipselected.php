<?php
require_once '../facebook/configuration.php';
require_once '../facebook/functions.php';
require_once '../google/bucket/configuration.php';
require_once '../google/bucket/easy_bucket.php';


ini_set('max_execution_time', 300);

if(isset($_GET['albumid'])){
	if($_GET['albumid'] != 'zipAll'){
		$ids = explode(",",$_GET['albumid']);
		foreach($ids as $id){
			$albumPictures = getAlbumPictures($id);
			$albumName = str_replace(" ","_",$albumPictures['name']);
			$zip = new ZipArchive();
			$zip_name = $albumName;
			$index = 0;
			if (!file_exists("zips/".$_SESSION['Facebook_Id'])) {
				mkdir("zips/".$_SESSION['Facebook_Id'], 0777, true);
			}
			if($zip->open("zips/".$_SESSION['Facebook_Id']."/".$zip_name.".zip", ZIPARCHIVE::CREATE)!==TRUE)  
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
			
			uploadToBucket($_SESSION['Facebook_Id'],$zip_name);
		}
	}else{
		foreach(getAlbums() as $album){
			if($album->count > 0){
				$albumPictures = getAlbumPictures($album->id);
				$albumName = str_replace(" ","_",$albumPictures['name']);
				$zip = new ZipArchive();
				$zip_name = $albumName;
				$index = 0;
				if (!file_exists("zips/".$_SESSION['Facebook_Id'])) {
					mkdir("zips/".$_SESSION['Facebook_Id'], 0777, true);
				}
				if($zip->open("zips/".$_SESSION['Facebook_Id']."/".$zip_name.".zip", ZIPARCHIVE::CREATE)!==TRUE)  
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
				
				uploadToBucket($_SESSION['Facebook_Id'],$albumName);
			}
		}
	}
	
	echo $_GET['albumid'];
	
}
 
?>