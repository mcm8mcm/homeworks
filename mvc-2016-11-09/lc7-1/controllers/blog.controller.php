<?php

class BlogController extends Controller{

    public function index(){
        $this->data['test_content'] = 'Here will be a pages list';
    }

    public function view(){
        $params = App::getRouter()->getParams();

        if ( isset($params[0]) ){
            $alias = strtolower($params[0]);
            $this->data['content'] = "Here will be a page with '{$alias}' alias";
        }
        else {
        	$this->data['content'] = 'There is no content to view';
        }
    }
    
    public function additional_function(){
    	$params = App::getRouter()->getParams();
    
    	if ( isset($params[0]) ){
    		$alias = var_export($params, 1);
    		$this->data['content'] = "Here were passed some parameters '{$alias}'";
    	}
    	else {
    		$this->data['content'] = 'Here were no parameters passed in this super-duper additional_function';
    	}
    }
    
}