<?php
require_once 'product.php';

class BabyCar extends Product
{
    private $specialTax;
    public $age;
    public $weight;
    private $materials = [];


    public function setMaterial(...$materials)
    {
        foreach ($materials as $material) {
            $this->materials[] = $material;
        }
    }
    public function displayMaterials()
    {
        return $this->materials;
    }

    public function getFinallPrice($price, $specialTax)
    {
        $this->specialTax = $specialTax;
        $finelPrice = $price + ($this->specialTax / 100 * $price);
        return $finelPrice;
    }
}

$babyCar1 = new BabyCar();

$babyCar1->setMaterial("Plastic", "Metal", "Wood", "Rubber", "Glass", "Leather");
$babyCar1->setMaterial('ahmed');
$babyCar1->setMaterial('mohamed');
$babyCar1->setMaterial('3isa');
$materials = $babyCar1->displayMaterials();
foreach ($materials as $material) {
    echo "<h3><li>$material</li></h3>";
}
$price = 980;
echo $babyCar1->getFinallPrice($price, 10);
