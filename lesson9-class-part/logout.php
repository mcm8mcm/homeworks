<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 19.10.2016
 * Time: 19:51
 */

setcookie('User', '', time() - 3600);

header('Location: index.php?timeRed=' . time());