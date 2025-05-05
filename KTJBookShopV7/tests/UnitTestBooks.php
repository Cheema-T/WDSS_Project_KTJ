<?php
include "../classes/book.php";
class UnitTestBooks {
    public function testBook(){
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

        $book->displayBook($book) . "\n";
  }
 }
  $unitTest = new UnitTestBooks();
  $unitTest->testBook();
?>
