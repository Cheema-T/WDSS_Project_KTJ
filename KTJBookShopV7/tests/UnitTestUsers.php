<?php
include "../classes/user.php";
class UnitTestUsers{
    public function testUsers(){
        $user = new user();
        $user->setUserID(12);
        echo "UserID: " . $user->getUserID() . "\n";
        $user->setUserFirstName("Julia");
        echo "Fist Name: " . $user->getUserFirstName() . "\n";
        $user->setUserLastName("Sandy");
        echo "Last Name: " . $user->getUserLastName() . "\n";
        $user->setUserEmail("juliasandy@yahoo.com");
        echo "Email: " . $user->getUserEmail() . "\n";
        $user->setUserAddress("123 sunny rd");
        echo "Address: " . $user->getUserAddress() . "\n";
        $user->setUserPhoneNum("0812931093");
        echo "Phone Number: " . $user->getUserPhoneNum() . "\n";

        $user->DisplayUser($user) . "\n";
    }
}
 $unitTest = new UnitTestUsers();
 $unitTest->testUsers();
?>