<?php
include "../classes/featured.php";
class UnitTestFeatured{
    public function testFeature(){
            $book = new book();
            $book->setBookTitle("The Hunger Games");
            echo "Title: " . $book->getBookTitle(). "\n";
            $book->setBookAuthor("Suzanne Collins");
            echo "Author: " . $book->getBookAuthor(). "\n";
            $book->setBookGenre("Fiction");
            echo "Genre: " . $book->getBookGenre() . "\n";
            $book->setBookPrice(11.99);
            echo "Price: " . $book->getBookPrice(). "\n";
            $book->setBookIBAN("11233223");
            echo "IBAN: " . $book->getBookIBAN(). "\n";
             $feature = new featured();
             $feature->featuredBook($feature) . "\n";
    }
}
$unitTest = new UnitTestFeatured();
$unitTest->testFeature();
?>