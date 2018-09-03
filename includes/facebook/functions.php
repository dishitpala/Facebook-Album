<?php

require_once 'configuration.php';


function getFacebookUrl(){
	global $facebook;
	$URL = $facebook->login();
	return $URL;
}

// USE: echo getBasics()->name;
function getBasics(){
	global $facebook;
	$basics = json_decode($facebook -> easy_query('/me'));
	$_SESSION['Facebook_Id'] = $basics->id;
	return $basics;
}

// USE: echo getBasics()->name;
function _id(){
	global $facebook;
	$basics = json_decode($facebook -> easy_query('/me'));
	$_SESSION['Facebook_Id'] = $basics->id;
	$_SESSION['Facebook_User'] = $basics->name;
	return $_SESSION['Facebook_Id'];
}

// USE: echo getPicture();
function getPicture(){
	global $facebook;
	$profile_pic = json_decode($facebook -> easy_query('/me/picture?type=large&redirect=false'));
	return $profile_pic->data->url;
}

// USE: getAlbums() loop to fetch id,name & count; 
function getAlbums(){
	global $facebook;
	$basics = json_decode($facebook -> easy_query('/me?fields=albums{id,name,count}'));
	$albums = $basics->albums->data;
	return $albums;	
}
// USE: returns the next page data
function nextPage($link){
	$page = file_get_contents($link);
	$jsonData = json_decode($page);
	return $jsonData;
}

// USE: getAlbumPictures('102616669821602');
function getAlbumPictures($albumId){
	global $facebook;
	$basics = json_decode($facebook -> easy_query('/'.$albumId.'?fields=id,name,photos{images}'));
	$albumName = $basics->name;
	$imageSource = array();
	$nextlink = $basics->photos->paging->next;
	$images = $basics->photos->data;
	foreach($basics->photos->data as $data){
		array_push($imageSource,$data->images[0]->source);
	}
	while(isset($nextlink)){
		$nextPageData = nextPage($nextlink);
		
		if(isset($nextPageData->paging->next)){
			$nextlink = $nextPageData->paging->next;
		}else{
			$nextlink = null;
		}
		foreach($nextPageData->data as $nextdata){
				array_push($imageSource,$nextdata->images[0]->source);
			}
	}
	return array('name'=>$albumName,'source'=>$imageSource);
	
}
//getAllAlbumPictures('127576998189768');

// USE: getPopAlbum('102616669821602');
function getPopAlbum($albumId){
	global $facebook;
	$basics = json_decode($facebook -> easy_query('/'.$albumId.'?fields=id,name,photos{images}'));
	$albumName = $basics->name;
	$imageSource = array();
	$nextlink = $basics->photos->paging->next;
	$images = $basics->photos->data;
	foreach($basics->photos->data as $data){
		$formate = array('src' => $data->images[0]->source,
					  'h' => $data->images[0]->height,
					  'w' => $data->images[0]->width);
			  
		array_push($imageSource,$formate);
	}
	while(isset($nextlink)){
		$nextPageData = nextPage($nextlink);
		
		if(isset($nextPageData->paging->next)){
			$nextlink = $nextPageData->paging->next;
		}else{
			$nextlink = null;
		}
		foreach($nextPageData->data as $data){
			$formate = array('src' => $data->images[0]->source,
							  'h' => $data->images[0]->height,
							  'w' => $data->images[0]->width);
			  
			array_push($imageSource,$formate);
		}
	}
	return json_encode($imageSource,JSON_UNESCAPED_SLASHES);
}


function logout(){
	global $facebook;
	return $facebook->easy_logout();
}


?>