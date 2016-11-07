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
    
    private function getPrice()
    {
    	return $this->price;
    }
    
    protected function getDiscount()
    {
    	return $this->discount;
    }
    
    public function getTaxRate()
    {
    	return $this->taxRate;
    }
    
    public function getAll()
    {
    	return [$this->getDiscount(),$this->getTaxRate(),$this->getPrice()];
    }
    
}

$product = new Product();

$reflect = new ReflectionClass($product);
$productMeth = $reflect->getMethods();

if (!empty($productMeth)) {
    foreach ($productMeth as $meth) {
        echo 'Method name: ' . $meth->getName() . '<br>';
        if ($meth->isProtected() || $meth->isPrivate()) {
            echo ' Protected or private method. Set it accessible. <br>';
            $meth->setAccessible(true);
        }
        
        echo 'Call result: ';
        echo var_dump($meth->invoke($product));
        echo '<br>';
    }
}