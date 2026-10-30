<?php

// get 
class Product
{
    private $title = 'This a good product';
    private $shortDiscription;
    private $price;
    private $type;
    private array $dynamicData = [];
    public function __set($Property, $value)
    {
        $this->dynamicData[$Property] = $value;
    }
    public function __get($Property)
    {
        return $this->dynamicData;
    }
}

$product1 = new Product;
$product1->username = 'alice123'; // Triggers __set('username', 'alice123')
$product1->role = 'admin';
print_r($product1->dynamicData);
