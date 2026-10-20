
<?php
require_once 'product.php';
class Book extends Product
{
    private $publisher;
    public $writer;
    public $color;
    public $supplier;
    public function setPublisher(...$arrayPublisher)
    {
        return $this->publisher = $arrayPublisher;
    }

    public function chossePublisher($index)
    {
        return $this->publisher[$index];
    }

    public function showAllPublishers()
    {
        return $this->publisher;
    }
    // public function searchPublisher($publisher)
    // {
    //     return $this->publisher;
    // }
}
$book1 = new Book();
$publishers = $book1->setPublisher("Publisher 1", "Publisher 2", "Publisher 3", "Publisher 4", "Publisher 5", "Publisher 6");
foreach ($publishers as $publisher) {
    echo "<h3><li>$publisher</li></h3>";
}
echo "<br>";
print_r($book1->chossePublisher(array_rand($publishers)));
