<?php
include "user.php";
class review extends user{

    protected $reviewID;
    protected $reviewRating;
    protected $reviewDate;
    protected $reviewText;

    public function setReviewID($reviewID){
     $this->reviewID = $reviewID;
    }

    public function getReviewID(){
     return $this->reviewID;
    }

    public function setReviewRating($reviewRating){
     $this->reviewRating = $reviewRating;
    }

    public function getReviewRating(){
     return $this->reviewRating;
    }

    public function setReviewDate($reviewDate){
     $this->reviewDate = $reviewDate;
    }

    public function getReviewDate(){
     return $this->reviewDate;
    }

    public function setReviewText($reviewText){
     $this->reviewText = $reviewText;
    }

    public function getReviewText(){
     return $this->reviewText;
    }



    public function displayReview(){
          echo"<br>";
          echo"<br>Review ID: " . $this->getReviewID();
          echo"<br>Review Date: " . $this->getReviewDate();
          echo"<br>Review Rating: " . $this->getReviewRating();
          echo"<br>Review : " . $this->getReviewText();
          echo"<br>User: " . $this->getUserFirstName();
          }

    }



