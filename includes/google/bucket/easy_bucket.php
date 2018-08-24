<?php
require_once 'configuration.php';

// USE: uploadToBucket('dishit','photo.png');
function uploadToBucket($folder,$file){
	global $filesystem;
	$content = file_get_contents($file.'.zip');
	$exists = $filesystem->has($folder.'/'.$file.'.zip');
	if($exists == true){
		$filesystem->update($folder.'/'.$file.'.zip', $content);
	}else{
		$filesystem->write($folder.'/'.$file.'.zip', $content);
	}
}

//USE: listObjects('dishitpala');
function listObjects($session){
    global $bucket;
	$userZippedAlbums = array();
    foreach ($bucket->objects() as $object) {
		list($folder,$content) = explode('/',$object->name());
		if($session == $folder){
			$contentToString = (string)$content;
			array_push($userZippedAlbums,$contentToString);
		}
    }
	return $userZippedAlbums;
}
//print_r(listObjects('dishitpala'));

// USE: downloadBucketFile('dishitpala/photo.zip');
function downloadBucketFile($folder,$file){
	global $filesystem;
	try{
		$contents = $filesystem->read($folder.'/'.$file);
		file_put_contents($file,$contents);
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename="'.basename($file).'"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		
		ob_clean();
			flush();
			
		readfile($file);
		exit;
		
	}catch(Exception $e){
		print_r('file not exist');
	}
}

//downloadBucketFile('dishitpala/'.listObjects('dishitpala')[1]);


?>