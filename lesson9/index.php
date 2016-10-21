<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 19.10.2016
 * Time: 19:01
 */

ob_start();

require_once 'auth.php';

global $pageContent, $pageTitle;
if (isset($_GET['page'])) {
    $pageTitle = ucfirst($_GET['page']);
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
    }
}else{
    include_once 'templates' . DIRECTORY_SEPARATOR . 'home.php';
}



$pageContent = ob_get_contents();
ob_end_clean();
include_once 'templates' . DIRECTORY_SEPARATOR . '_layout.php';
//$outPutData = ob_get_contents();
