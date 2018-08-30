<?php
require_once '../facebook/configuration.php';
require_once '../facebook/functions.php';

if($_GET['id']){
	echo getPopAlbum($_GET['id']);
}
?>