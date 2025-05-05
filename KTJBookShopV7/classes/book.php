<?php
class book{

   protected $bookTitle;
   protected $bookGenre;
   protected $bookAuthor;
   public $bookIBAN;
   protected $bookPrice;

   public function setBookTitle($bookTitle){
   $this->bookTitle = $bookTitle;
   }

   public function getBookTitle(){
      return $this->bookTitle;
   }

   public function setBookGenre($bookGenre){
      $this->bookGenre = $bookGenre;
      }

   public function getBookGenre(){
         return $this->bookGenre;
   }

   public function setBookAuthor($bookAuthor){
       $this->bookAuthor = $bookAuthor;
   }

   public function getBookAuthor(){
          return $this->bookAuthor;
   }
   public function setBookIBAN($bookIBAN){
      $this->bookIBAN = $bookIBAN;
   }

   public function getBookIBAN(){
         return $this->bookIBAN;
   }

   public function setBookPrice($bookPrice){
      $this->bookPrice = $bookPrice;
   }

   public function getBookPrice(){
         return $this->bookPrice;
   }

   public function displayBook(){
   echo"<br>";
   echo"<br>Title:" . $this->getBookTitle();
   echo"<br>Author:" . $this->getBookAuthor();
   echo"<br>IBAN:" . $this->getBookIBAN();
   echo"<br>Genre:" . $this->getBookGenre();
   echo"<br>Price:" . $this->getBookPrice();

   }


}