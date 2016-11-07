<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 19:03
 */

class ConstrDestr
{
    function __construct()
    {
        echo __METHOD__ . PHP_EOL;
    }

    function __destruct()
    {
        echo __METHOD__ . PHP_EOL;
    }
}

$ex1 = new ConstrDestr();
