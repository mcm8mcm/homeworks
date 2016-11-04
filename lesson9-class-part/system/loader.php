<?php 
class Loader{
	const DEF_PAGE = "Default page";
	
	public function __get($name){
		global $pageTitle;
		ob_start();
		$content = '';
	
		if(file_exists("templates" . DS . "$name.php")) {
			include_once "templates" . DS . "$name.php";
		} else {
			include_once "templates" . DS . "404.php";
		}
		$content = ob_get_contents();
		ob_end_clean();
		
		return $content;
	}
	
	public static function getDefault(){
		global $pageTitle;
		ob_start();
		include_once "templates" . DS . "home.php";
		$content = ob_get_contents();
		ob_end_clean();
		return $content;
	}
}