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

echo 'GreenTea::getStaticName(): ' . var_export(GreenTea::getStaticName(), 1) . '<br>';
echo 'GreenTea::getTeaName(): ' . var_export(GreenTea::getTeaName(), 1) . '<br>';
echo 'GreenTea::getParentName(): ' . var_export(GreenTea::getParentName(), 1) . '<br>';