<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 20:16
 */

class Except1Exception extends Exception
{
    public function more()
    {
        echo 'Do more with ' . __CLASS__;
    }
}

class Except1
{
    public function demo1()
    {
        if (rand(0, 1)) {
            throw new Except1Exception('Error demo in ' . __CLASS__);
        } else {
            throw new Exception('Another error');
        }
    }
}

try
{
    $ex1 = new Except1();
    $ex1->demo1();
    echo 'Ok' . '<br>';
}
catch(Except1Exception $e) {
    echo $e->more() . ' Trace: ' . $e->getTraceAsString();
}
catch(Exception $e) {
    echo $e->getMessage();
}
finally {
    echo 'Finally block' . '<br>';
}