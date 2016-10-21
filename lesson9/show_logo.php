<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 19.10.2016
 * Time: 19:07
 */

$fileName = dirname(__FILE__) . DIRECTORY_SEPARATOR .
    'files' . DIRECTORY_SEPARATOR .
    'php-logo.png';
// header('Content-type: text/plain', false);
header('Content-type: image/png', false);
readfile($fileName);