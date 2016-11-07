<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 21:04
 */

class Magic1Demo
{
    public function __get($name)
    {
        echo __METHOD__ . ': ' . var_export($name, 1);
    }

    public function __set($name, $value)
    {
        echo __METHOD__ . ' Trying to set propery: ' . var_export($name, 1) . ' with value: ' . var_export($value, 1);
    }

    public function __call($name, $args)
    {
        echo __METHOD__ . ' calling method ' . var_export($name, 1) . ' with arguments: ' . var_export($args, 1);
    }
}

$m1 = new Magic1Demo();
$m1->name;
echo '<hr>';
$m1->name = 'Vasya';
echo '<hr>';
$m1->funct1(['foo1' => 'boo 1', 'foo2' => 'boo 2']);