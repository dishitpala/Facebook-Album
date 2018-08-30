 <?php
 require_once('includes/facebook/easy_facebook.php');
 
 class FacebookFunctionTest extends PHPUnit_Framework_TestCase{
	 
	public $facebook_constructor;
	 
	function setUp(){
		 
		$this->facebook_constructor = new easy_facebook(array(
			'app_id' => '{}', //Facebook App ID
			'app_secret' => '{}', //Facebook App Secret
			'default_graph_version' => '{}', //Graph version
		));
		
		 
	}
 
    public function testingHelper()
    {
        $result = $this->facebook_constructor->easy_helper();
        $this->assertFalse(is_string($result));
    }
	
	public function testingPermissions(){
		$permission = $this->facebook_constructor->permissions(['email']);
		$this->assertTrue(is_array($permission));
		$this->assertFalse(is_string($permission));
		$this->assertFalse(is_numeric($permission));
	}
	
 } 
 
 ?>