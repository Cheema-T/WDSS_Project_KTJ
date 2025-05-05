<?php
include "../classes/review.php";

class UnitTestReviews{
    public function testReview(){
        $review = new review();
        $review->setReviewID(31);
        echo "ReviewID: " . $review->getReviewID(). "\n";
        $review->setReviewDate("03/10/2024");
        echo "Date: " . $review->getReviewDate(). "\n";
        $review->setReviewText("Loved this book!");
        echo "Review : " . $review->getReviewText() . "\n";
        $review->setReviewRating("5/5");
        echo "Rating : " . $review->getReviewRating() . "\n";

        $review->displayReview($review) . "\n";

  }
 }
  $unitTest = new UnitTestReviews();
  $unitTest->testReview();

?>