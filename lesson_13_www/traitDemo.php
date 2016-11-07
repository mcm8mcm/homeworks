<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 20:56
 */

trait Tr1
{
    function t1($s) {
        echo $s;
    }
}

class Tr1Demo
{
    const NAME = 'T1 Name';

    use Tr1;

    public function f1()
    {
        $this->t1(self::NAME);
    }
}

class Tr2Demo
{
    use Tr1;

    public function f1()
    {
        $this->t1(__METHOD__);
    }
}

$t1 = new Tr1Demo();
echo '$t1->f1():<br>';
$t1->f1();
echo '<hr>';

$t2 = new Tr2Demo();
echo '$t2->f1():<br>';
$t2->f1();

