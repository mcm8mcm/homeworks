<?php
/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 04.11.2016
 * Time: 19:38
 */

class Product
{
    public $price = 12.5;
    protected $taxRate = 25;
    private $discount = 10;
}

$product = new Product();

$reflect = new ReflectionClass($product);
$productProps = $reflect->getProperties();

if (!empty($productProps)) {
    // echo 'Properties: ' . var_export($productProps, 1) . '<br>';
    foreach ($productProps as $prop) {
        echo 'Name: ' . $prop->getName() . '<br>';
        if ($prop->isProtected() || $prop->isPrivate()) {
            echo ' Protected or private property. Set it accessible. ';
            $prop->setAccessible(true);
        }
        echo 'Value: ' . $prop->getValue($product) . '<br>';
    }
}