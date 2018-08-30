<?php

// Include the autoloader provided in the SDK
require_once __DIR__ . '/../../library/vendor/autoload.php';

// Include required libraries
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;



class easy_facebook extends Facebook{
	
	public $permission,$url;
	
	
	function easy_helper(){
		$easy_helper = $this->getRedirectLoginHelper();
		return  $easy_helper;
	}
	
	
	function permissions($permission){
		return $this->permission = $permission;
	}
	
	
	function easy_redirect($url){
		return $this->url = $url;
	}
	
	
	function login(){
		return $this->easy_helper()->getLoginUrl($this->url,$this->permission);
	}
	
	function isLoggedIn(){
		if(isset($_SESSION['Facebook_Token']) && !empty($_SESSION['Facebook_Token'])){
			return true;
		}else{
			return false;
		}
	}
	
	function easy_token() {
			try {
				if($this -> isLoggedIn() == false){
					$easy_token = $this->easy_helper()->getAccessToken($this->url);
				}else{
					$easy_token = $_SESSION['Facebook_Token'];
				}
			} catch (Facebook\Exceptions\FacebookResponseException $e) {
				// When Graph returns an error
				echo 'Graph returned an error: ' . $e->getMessage();
				exit;
			} catch (Facebook\Exceptions\FacebookSDKException $e) {
				// When validation fails or other local issues
				echo 'Facebook SDK returned an error: ' . $e->getMessage();
				exit;
			}
			if (!isset($easy_token)) {
				if ($this->easy_helper()->getError()) {
					header('HTTP/1.0 401 Unauthorized');
					echo "Error: " . $this->easy_helper()->getError() . "\n";
					echo "Error Code: " . $this->easy_helper()->getErrorCode() . "\n";
					echo "Error Reason: " . $this->easy_helper()->getErrorReason() . "\n";
					echo "Error Description: " . $this->easy_helper()->getErrorDescription() . "\n";
				} else {
					//echo '<a href="' . $this->login() . '">Login with Facebook</a>';
					return false;
				}
				exit;
			}
			$_SESSION['Facebook_Token'] = (string) $easy_token;
			
	}
	
	function easy_query($query){
	    if ($this->isLoggedIn() == true){
			try {
				// Returns a `Facebook\FacebookResponse` object
				$response = $this->get('/'.$query, $_SESSION['Facebook_Token']);
			} catch (Facebook\Exceptions\FacebookResponseException $e) {
				echo 'Graph returned an error: ' . $e->getMessage();
				exit;
			} catch (Facebook\Exceptions\FacebookSDKException $e) {
				echo 'Facebook SDK returned an error: ' . $e->getMessage();
				exit;
			}	
			$data = $response->getBody();
			return $data;
		}
	}

	
	
}


?>