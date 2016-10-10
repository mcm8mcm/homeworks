<?php 
	include '../common/header.php';
	function loadFiles(){
		
	}

	if(count($_FILES) != 0){
		loadFiles();
	}
	
	header('Location: '. BASE_PATH . '6' . PD . '6.php');
?>

