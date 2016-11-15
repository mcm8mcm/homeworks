<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 11.11.2016
 * Time: 19:35
 */

class User extends Model
{
	private function prepareParam($param){
		return strip_tags($this->db->escape($param));
	}
	
	private function reset(){
		if (isset($_SESSION['user_error_msg'])) {
			unset($_SESSION['user_error_msg']);
		}
		
		if (isset($_SESSION['add_user_success'])) {
			unset($_SESSION['add_user_success']);
		}
	}
	
	public function __construct()
    {
        parent::__construct();
    }

    public function isUserExists($user_name)
    {
    	$user_name = $this->prepareParam($user_name);
    	$sql = "SELECT * FROM `users` WHERE UPPER(`login`) = UPPER('$user_name') LIMIT 1";
    	$res = $this->db->query($sql);
    	if($res !== false && count($res)){
    		return true;
    	}
    	
    	return false;
    }
    
    public function getUser($user_name, $password='')
    {
    	$this->reset();
    	
    	if(isset($_SESSION['USER'])){
    		unset($_SESSION['USER']);
    	}
    	
    	$user_name = $this->prepareParam($user_name);
    	$password = md5($this->prepareParam($password));
    	$sql = "SELECT * FROM `users` WHERE UPPER(`login`) = UPPER('$user_name') AND `password` = '$password' LIMIT 1";
    	$res = $this->db->query($sql);
    	if($res !== false){
    		if(count($res)){
    			$_SESSION['user'] = $res[0];
    			return true;
    		}
    	}
    	
    	return false; 	 
    }
    
    public function logIn()
    {
    	$this->reset();
    	
    	if(isset($_POST['user_name'])){
    		$user_name = $this->prepareParam($_POST['user_name']);
    		$password = $_POST['password'];
    	}else {
    		return;
    	}
    	 
    	if(isset($_SESSION['user'])){
    		if(strtoupper($_SESSION['user']['login']) === strtoupper($user_name)){
    			$_SESSION['add_user_success'] = 'User ' . $user_name . ' is already logged in.';
    			return;
    		}
    	}
    	
    	$user = $this->getUser($user_name, $password);
    	if($user === false){
    	  $_SESSION['user_error_msg'] = 'User name or(and) password is(are) wrong.';
    	}
    }
        
    public function signUp()
    {
    	$this->reset();
    	
    	if(isset($_POST['user_name'])){
    		if($this->isUserExists($_POST['user_name'])){
    			$_SESSION['user_error_msg'] = '<strong>User name ' . $_POST['user_name']. ' is already taken</strong> !';
    			Router::gotoUrl(Config::get('root_prefix') . 'users');
    		}
    	}
  	
    	$name = $this->prepareParam($_POST['user_name']);
    	$email = $this->prepareParam($_POST['e_mail']);
    	$password = md5($this->prepareParam($_POST['password']));
    	
    	$sql = "INSERT INTO `users` (`login`,`email`,`password`) values ('$name', '$email', '$password')"; 

    	$res = $this->db->query($sql);
    	if($res !== false){
    		$_SESSION['add_user_success'] = 'User ' . $name . ' successfully added';
    	}
    }
}