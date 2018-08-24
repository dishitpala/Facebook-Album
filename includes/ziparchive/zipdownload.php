<?php
session_start();

require_once '../google/bucket/configuration.php';
require_once '../google/bucket/easy_bucket.php';


if(isset($_GET['name'])){
		if(downloadBucketFile($_SESSION['Facebook_Id'],$_GET['name'].'.zip')){
			echo $_GET['name'];
		}
}
?>