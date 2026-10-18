
<?php
require_once 'product.php';
class Book extends Product
{
    private $publisher;
    public $writer;
    public $color;
    public $supplier;
    public function setPublisher(...$publisher)
    {
        return $this->publisher = $publisher;
    }

    public function chossePublisher($index)
    {
        return $this->publisher[$index];
    }

    public function showAllPublishers()
    {
        return $this->publisher;
    }
}
$book1 = new Book();
$book1->setPublisher("Publisher 1", "Publisher 2", "Publisher 3");
print_r($book1->showAllPublishers());
echo "<br>";
print_r($book1->chossePublisher(1));
