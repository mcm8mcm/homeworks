<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 19:11
 */

class StaticDemo
{
    static $demo1 = 'Test1';

    public static function staticDemo1()
    {
        // echo self::$demo1 . ' from ' . __METHOD__;
        echo StaticDemo::$demo1;
    }
}

echo var_dump(StaticDemo::staticDemo1());