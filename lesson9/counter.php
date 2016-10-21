<?php
/**
 * Created by PhpStorm.
 * User: 32
 * Date: 19.10.2016
 * Time: 20:16
 */

if (isset($_COOKIE['visits'])) {
    $numVisits = intval($_COOKIE['visits']);
    $numVisits += 1;
} else {
    $numVisits = 0;
}

if (!headers_sent()) {
    setcookie('visits', $numVisits);
}

?>
You have visited this page <?=$numVisits?> times.

