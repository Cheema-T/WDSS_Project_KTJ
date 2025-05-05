<?php
class user{

   protected $userID;
   public $userFirstName;
   protected $userLastName;
   protected $userEmail;
   protected $userAddress;
   protected $userPhoneNum;

   public function setUserID($userID){
   $this->userID = $userID;
   }

   public function getUserID(){
      return $this->userID;
   }

   public function setUserFirstName($userFirstName){
      $this->userFirstName = $userFirstName;
      }

   public function getUserFirstName(){
         return $this->userFirstName;
   }

   public function setUserLastName($userLastName){
       $this->userLastName = $userLastName;
   }

   public function getUserLastName(){
          return $this->userLastName;
   }
   public function setUserEmail($userEmail){
      $this->userEmail = $userEmail;
   }

   public function getUserEmail(){
         return $this->userEmail;
   }

   public function setUserAddress($userAddress){
      $this->userAddress = $userAddress;
   }

   public function getUserAddress(){
         return $this->userAddress;
   }

    public function setUserPhoneNum($userPhoneNum){
         $this->userPhoneNum = $userPhoneNum;
      }

      public function getUserPhoneNum(){
            return $this->userPhoneNum;
      }

   public function displayUser(){
   echo"<br>";
   echo"<br>User ID:" . $this->getUserID();
   echo"<br>First Name:" . $this->getUserFirstName();
   echo"<br>Last Name:" . $this->getUserLastName();
   echo"<br>Email:" . $this->getUserEmail();
   echo"<br>Phone Number:" . $this->getUserPhoneNum();
   echo"<br>Address:" .$this->getUserAddress();

   }


}