<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 19.10.2016
 * Time: 19:01
 */
require_once 'config.php';

ob_start();
global $pageContent, $pageTitle;

require_once 'auth.php';

require_once SYSTEM_PATH . 'loader.php';

$Loader = new Loader();

if (isset($_GET['page'])) {
    $pageTitle = ucfirst($_GET['page']);
    $pageContent = $Loader->$_GET['page'];
    /*
    switch($_GET['page']) {
        case 'articles':
            include_once 'templates' . DIRECTORY_SEPARATOR . 'articles.php';
            break;
        case 'products':
            include_once 'templates' . DIRECTORY_SEPARATOR . 'products.php';
            break;
        case 'contact':
            include_once 'templates' . DIRECTORY_SEPARATOR . 'contact.php';
            break;
        case 'home':
            include_once 'templates' . DIRECTORY_SEPARATOR . 'home.php';
            break;
        case 'logout':
            include_once '' . DIRECTORY_SEPARATOR . 'logout.php';
            break;
        default:
            include_once 'templates' . DIRECTORY_SEPARATOR . '404.php';
            break;
    }*/
}else{
	$pageTitle = Loader::DEF_PAGE;
	$pageContent = Loader::getDefault();
    //include_once 'templates' . DIRECTORY_SEPARATOR . 'home.php';
}

include_once 'templates' . DIRECTORY_SEPARATOR . '_layout.php';
