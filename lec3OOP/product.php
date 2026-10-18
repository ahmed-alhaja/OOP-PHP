<?php

class Product
{
    public $name;
    public $price;
    public $description;
    public $image;

    public function uploadImage($image)
    {
        $this->image = $image;
    }
    public function caLcPrice($price)
    {
      //
    }
}
// $product1 = new Product;
// $product1->name = 'ahmed';
// echo $product1->name;
