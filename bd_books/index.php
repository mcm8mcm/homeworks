<?php
include_once 'config.php';
include_once 'common/title.php';
include_once 'common/footer.php';
ob_start();

global $pageContent, $pageTitle;
$req_page = isset($_GET['page']) ? $_GET['page'] : "home";
$file_name = '.' . DS . 'templates' . DS . $req_page . '.php';
$req_page = file_exists($file_name) ? $req_page : '404';
$pageTitle = ucfirst($req_page);

switch ($req_page) {
	case 'authors' :
		include_once 'templates' . DIRECTORY_SEPARATOR . 'authors.php';
		break;
	case 'publishers' :
		include_once 'templates' . DIRECTORY_SEPARATOR . 'publishers.php';
		break;
	case 'home' :
		include_once 'templates' . DIRECTORY_SEPARATOR . 'home.php';
		break;
	default :
		include_once 'templates' . DIRECTORY_SEPARATOR . '404.php';
		break;
}



$pageContent = ob_get_contents();
ob_end_clean();
include_once 'templates' . DIRECTORY_SEPARATOR . '_layout.php';