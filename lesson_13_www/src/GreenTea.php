<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 20:34
 */
class GreenTea extends Tea
{
    public static function getTeaName()
    {
        return __CLASS__;
    }

    public static function getParentName()
    {
        return parent::getTeaName();
    }
}