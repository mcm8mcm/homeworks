<?php

class UsersController extends Controller{

    public function index(){
        //$this->data['test_content'] = 'Here will be a pages list';
        $users = new User();  
    }

    public function signUp(){
    	if(!isset($_POST['user_name'])){
    		App::getRouter()->gotoUrl('/');
    	}
    	$users = new User();
    	$users->signUp($_POST['user_name'], $_POST['password'], $_POST['e_mail']);
    	App::getRouter()->gotoUrl(Config::get('root_prefix').'users');
    }
    
    public function logIn(){
    	if(!isset($_POST['user_name'])){
    		App::getRouter()->gotoUrl('/');
    	}
    	$users = new User();
    	$users->logIn($_POST['user_name'], $_POST['password']);
    	App::getRouter()->gotoUrl(Config::get('root_prefix').'users');
    }
    
    public function logOut(){
    	if(isset($_SESSION['user'])){
    		unset($_SESSION['user']);
    	}    	
    	App::getRouter()->gotoUrl(Config::get('root_prefix').'users');
    }
    
    
    public function view(){
        $params = App::getRouter()->getParams();

        if ( isset($params[0]) ){
            $alias = strtolower($params[0]);
            $this->data['content'] = "Here will be a page with '{$alias}' alias";
        }
    }

}