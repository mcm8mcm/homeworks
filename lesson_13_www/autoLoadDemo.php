<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 20:31
 */

function loadClass($name)
{
    if (!class_exists($name)) {
        $classFile = 'src' . DIRECTORY_SEPARATOR . ucfirst($name) . '.php';
        if (file_exists($classFile))
        {
            require_once $classFile;
        }
    }
}

spl_autoload_register('loadClass');

echo 'Tea::getTeaName(): ' . var_export(Tea::getTeaName(), 1);
