<?php
include "user.php";
class checkout extends user{

   protected $checkoutID;
   protected $checkoutDate;
   protected $checkoutPrice;


   public function setCheckoutID($checkoutID){
      $this->checkoutID = $checkoutID;
   }

   public function getCheckoutID(){
     return $this->checkoutID;
   }

   public function setCheckoutDate($checkoutDate){
      $this->checkoutDate = $checkoutDate;
   }

   public function getCheckoutDate(){
     return $this->checkoutDate;
   }

   public function setCheckoutPrice($checkoutPrice){
      $this->checkoutPrice = $checkoutPrice;
      }

   public function getCheckoutPrice(){
     return $this->checkoutPrice;
   }



    public function displayCheckout(){
      echo"<br>";
      echo"<br>CheckoutID: " . $this->getCheckoutID();
      echo"<br>Checkout Date: " . $this->getCheckoutDate();
      echo"<br>Checkout Price: " . $this->getCheckoutPrice();
      echo"<br>Customer Details: " . $this->displayUser();
      }

}