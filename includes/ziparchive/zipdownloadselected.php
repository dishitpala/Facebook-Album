<?php
session_start();
require_once '../facebook/configuration.php';
require_once '../facebook/functions.php';
require_once '../google/bucket/configuration.php';
require_once '../google/bucket/easy_bucket.php';


if(isset($_GET['name'])){
	if($_GET['name'] != 'downloadAll'){
		
		try{
			$zip = new ZipArchive();
			if($zip->open('selectedalbums.zip', ZIPARCHIVE::CREATE)!==TRUE)  
			{   
				// Opening zip file to load files  
				$error .= "* Sorry ZIP creation failed at this time";  
				echo $error;
			}
			$names = explode(",",$_GET['name']);
			foreach($names as $name){
				$contents = $filesystem->read($_SESSION['Facebook_Id'].'/'.$name.'.zip');
				$zip->addFromString($name.".zip",$contents);
			}
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename="'.basename('selectedalbums.zip').'"');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize('selectedalbums.zip'));
			
			ob_clean();
				flush();
				
			readfile("selectedalbums.zip");
			exit;
			
		}catch(Exception $e){
			print_r('file not exist');
		}
		
		
	}else{
		
		
		
		try{
			$zip = new ZipArchive();
			if($zip->open('allalbums.zip', ZIPARCHIVE::CREATE)!==TRUE)  
			{   
				// Opening zip file to load files  
				$error .= "* Sorry ZIP creation failed at this time";  
				echo $error;
			}
			foreach(getAlbums() as $album){
				if($filesystem->has($_SESSION['Facebook_Id'].'/'.str_replace(' ','_',$album->name).'.zip') == true){
					$contents = $filesystem->read($_SESSION['Facebook_Id'].'/'.str_replace(' ','_',$album->name).'.zip');
					$zip->addFromString(str_replace(' ','_',$album->name).".zip",$contents);
				}
			}
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename="'.basename('allalbums.zip').'"');
			header('Expires: 0');
			header('Cache-Control: must-revalidate');
			header('Pragma: public');
			header('Content-Length: ' . filesize('allalbums.zip'));
			
			ob_clean();
				flush();
				
			readfile("allalbums.zip");
			exit;
			
		}catch(Exception $e){
			print_r('file not exist');
		}

	}
	
}

?>