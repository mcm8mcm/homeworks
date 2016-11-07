<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 19:23
 */

class Tea
{
    public static function getTeaName()
    {
        return __CLASS__;
    }

    public static function getStaticName()
    {
        return self::getTeaName();
    }
}
