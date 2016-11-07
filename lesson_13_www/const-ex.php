<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 19:15
 */

class ConstDemo
{
    const NAME = 'Tea';
}

class BlackTea extends ConstDemo
{
    const NAME = 'Black Tea Lipton';

    public function __construct()
    {
        parent::__construct();
    }

    public static function getParentName()
    {
        return parent::NAME;
    }
}

echo 'Black tea name: ' . BlackTea::NAME . '<br>';
echo 'Parent tea name: ' . BlackTea::getParentName() . '<br><hr>';

echo 'Some tea name: ' . ConstDemo::NAME . '<br>';