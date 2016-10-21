<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 19.10.2016
 * Time: 19:31
 */

$fileName = dirname(__FILE__) . DIRECTORY_SEPARATOR .
    'files' . DIRECTORY_SEPARATOR .
    'IntelliJIDEA_ReferenceCard.pdf';
$saveName = basename($fileName);
header('Content-type: application/pdf');
// header('Content-type: text/plain');
readfile($fileName);