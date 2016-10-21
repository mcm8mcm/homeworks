<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 19.10.2016
 * Time: 19:36
 */

/*
$userName = $_SERVER['PHP_AUTH_USER'];
$userPass = $_SERVER['PHP_AUTH_PW'];

if (
    !isset($_SERVER['PHP_AUTH_USER'])
    || ($userName !== 'admin')
    || ($userPass !== 'test1')
) {

    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
    header('Location: login.php');
}
*/

if (isset($_COOKIE['User']) && ($_COOKIE['User'] == 'admin')) {
    session_start();
} else {
    header('Location: login.php?rTime=' . time());
}
