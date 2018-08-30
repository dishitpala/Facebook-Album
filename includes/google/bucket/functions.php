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
		$button .= '<a  class="mr-3" onclick="singleFromBucket(this.id)" data-toggle="modal" data-target="#myModal" data-toggle="tooltip" data-placement="bottom" title="download zip" href="#download"  role="button"   >
					<img src="assets/icons8/download.png"/>
				   </a>';			  
		
	}else{
		$button .= '<a class="mr-3"  role="button" data-toggle="tooltip" data-placement="bottom" title="click bucket to enable"  aria-pressed="true" disabled>
					<img src="assets/icons8/download-b&w.png">
				   </a>';
		
	}
	if($googledrive->isLoggedIn() == true){
		$button .= '<a class="mr-4" onclick="singleToDrive(this.id)" data-toggle="modal" data-target="#myModal" href="#download"  role="button"  >
					<img src="assets/icons8/googledrive.png">
				   </a>';			  
		
	}else{
		$button .= '<a class="mr-4" data-toggle="tooltip" data-placement="bottom" title="login to drive"  role="button"  aria-pressed="true" disabled>
					<img src="assets/icons8/googledrive-b&w.png">
				   </a>';
		
	}
	return $button;
}


?>