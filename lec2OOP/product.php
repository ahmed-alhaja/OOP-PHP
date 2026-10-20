<?php

class Product
{
    public $name;
    private $price;
    public $description;
    private $image;

    public function uploadImage($image)
    {
        return $this->image = $image;
    }
    public function caLcPrice(float $price)
    {
        return $this->price = $price;
    }
}
$product1 = new Product;
$product1->name = 'ahmed';
echo $product1->caLcPrice(398.6);
echo "<br>";
echo $product1->name;
