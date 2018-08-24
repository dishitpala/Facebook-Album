<?php
require_once 'easy_bucket.php';
require_once __DIR__ . '/../drive/configuration.php';


$object = listObjects($_SESSION['Facebook_Id']);

function renderButtons($album){
	global $googledrive;
	global $object;
	$button = '';
	$newName = str_replace(" ","_",$album.'.zip');
	if(in_array($newName ,$object)){
		$button .= '<a  class="mr-3" onclick="downloadAlbums(this.id)" href="#download"  role="button"   >
					<img src="assets/icons8/download.png"/>
				   </a>';			  
		
	}else{
		$button .= '<a class="mr-3"  role="button"  aria-pressed="true" disabled>
					<img src="assets/icons8/download-b&w.png">
				   </a>';
		
	}
	if($googledrive->isLoggedIn() == true){
		$button .= '<a class="mr-4" onclick="uploadAlbums(this.id)" href="#download"  role="button"  >
					<img src="assets/icons8/googledrive.png">
				   </a>';			  
		
	}else{
		$button .= '<a class="mr-4"   role="button"  aria-pressed="true" disabled>
					<img src="assets/icons8/googledrive-b&w.png">
				   </a>';
		
	}
	return $button;
}

?>