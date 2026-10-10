<?php

class Product
{
    public string $name;
    public int  $price;
    public string $brand;
    public string $image;
    public string $description;
    public int  $tax;

    function getName()
    {
        return $this->name;
    }
    function priceAfterDiscount(int $price, int $discount)
    {
        return $this->$price -  ($price *  ($discount / 100));
    }
    function getFinalPrice(int $price, int  $tax)
    {
        return $this->$price +  ($price *  ($tax / 100));
    }
}
// echo Product::priceAfterDiscount(10);
$product = new Product;
$product->name = 'ahmed';
$product->price = 2000;
$product->brand = 'Zara';
$product->description = 'Zara';
$product->tax = 2;
$priceAfterDiscount = $product->priceAfterDiscount(500, 10);
echo $product->priceAfterDiscount($priceAfterDiscount, $product->tax);
