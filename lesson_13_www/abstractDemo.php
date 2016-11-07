<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 19:48
 */

abstract class AbsParent
{
    public $name = 'Adam';
    public abstract function testF1();
    public function testF2()
    {
        echo 'Hello from ' . __CLASS__ . '<br>';
    }
}

class Son extends AbsParent
{
    public $name = 'Kain';

    public function testF1()
    {
        echo 'Hello from ' . __METHOD__ . '<br>';
    }

    public function testParentF2()
    {
        parent::testF2();
    }
}

$son = new Son();
$son->testF1();
$son->testParentF2();