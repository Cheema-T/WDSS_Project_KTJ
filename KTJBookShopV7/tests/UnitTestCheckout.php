<?php
include "../classes/checkout.php";
class UnitTestCheckout extends user{
    public function testCheckout(){
        $checkout = new checkout();
        $checkout->setCheckoutID(314);
        echo "CheckoutID: " . $checkout->getCheckoutID(). "\n";
        $checkout->setCheckoutDate("02/12/2024");
        echo "Date: " . $checkout->getCheckoutDate(). "\n";
        $checkout->setCheckoutPrice("12.50");
        echo "Price: " . $checkout->getCheckoutPrice() . "\n";


        $checkout->displayCheckout($checkout) . "\n";

  }
 }
  $unitTest = new UnitTestCheckout();
  $unitTest->testCheckout();

?>