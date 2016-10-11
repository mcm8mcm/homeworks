<?php
include '../common/header.php';
function loadFiles() {
	$gal_path = __DIR__ . DS . "gallery" . DS;
	
	if (count ( $_FILES ) != 0) {
		$files = $_FILES ['fl_pick'];
		$names = $files['name'];
		$tmp_names = $files['tmp_name'];
		$name_count = count ( $names );

		for($i = 0; $i < $name_count; $i ++) {
			move_uploaded_file($tmp_names[$i], $gal_path . $names[$i]);
		}
		
	}
}

if (count ( $_FILES ) != 0) {
	loadFiles ();
}

header ( 'Location: ' . BASE_PATH . '6' . PD . '6.php' );
?>

