<?php
require_once 'easy_googledrive.php';


$googledrive = new easy_googledrive(array(
	'ClientId' => '{}',
	'ClientSecret' => '{}',
	'AccessType' => '{}',
	'RedirectUri' => '{}'
	
));

$googledrive->easy_initialize();
$googledrive->easy_token();
	
?>