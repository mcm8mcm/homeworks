<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 19:55
 */

interface IChargable
{
    function charge();
}

interface IMovable
{
    function run();
    function stop();
}

interface ISpeedMesurable
{
    function getSpeed();
}

class Car implements IMovable, IChargable, ISpeedMesurable
{
    public function run()
    {
        // TODO: Implement run() method.
    }

    public function stop()
    {
        // TODO: Implement stop() method.
    }

    public function getSpeed()
    {
        // TODO: Implement getSpeed() method.
    }

    public function charge()
    {
        // TODO: Implement charge() method.
    }
}