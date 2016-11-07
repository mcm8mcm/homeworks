<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 20:42
 */

namespace App2
{
    class App1
    {
        public function func1()
        {
            echo 'And hello also from ' . __METHOD__ . '<br>';
        }
    }
}

namespace App
{
    class App1
    {
        public function func1()
        {
            echo 'Hello from ' . __METHOD__ . '<br>';
        }

        public function func2()
        {
            $app2 = new \App2\App1();
            echo '$app2->func1(): ' . '<br>';
            $app2->func1();
        }
    }
}



namespace
{
    $a1 = new App\App1();
    $a1->func1();
    $a1->func2();

    $a2 = new App2\App1();
    $a2->func1();
}





