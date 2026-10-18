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
        return $price -  ($price *  ($discount / 100));
    }
    function getFinalPrice(int $price, int  $tax)
    {
        return $price +  ($price *  ($tax / 100));
    }
}
// echo Product::priceAfterDiscount(10);
$product = new Product;
echo $product->name = 'ahmed' . "<br>";
$price = $product->price = 2000;
// echo $price;
echo $product->brand = 'Zara' . "<br>";
echo $product->description = 'Hallo Ahmed, willkommen auf meiner Website! Ich wünsche dir alles Gute. 😊' . "<br>";
$product->tax = 2;
echo $priceAfterDiscount = $product->priceAfterDiscount($price, 10);
echo "<br>";
echo $product->getFinalPrice($product->price, $product->tax);
