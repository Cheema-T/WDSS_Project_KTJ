<?php include "../templates/header.php"; ?>

<div class = "container">

<main>
<?php
echo "<h2>" . "Not sure what to read? Check out this feature page weekly for new recommendations. Below is this weeks top best seller!" . "</h2>" . "<br>" . "<br>" ;
?>;
<?php
require_once('../src/database.php');
$statement = $pdo->query("SELECT * FROM books LIMIT 1");

while($row = $statement->fetch()){
 echo " Iban: " . $row['IBAN'];
 echo " Title: " . $row['title'];
 echo " Author: " . $row['author'];
 echo " Price: " . $row['price'];
 echo " Genre: " . $row['genre'];
 }

?>

</main>
</div>

<form method = "POST">
    <input type = "hidden" name = "IBAN" value =" <?=($row['IBAN'])?>">
    <input type = "hidden" name = "title" value =" <?=($row['title'])?>">
    <input type = "hidden" name = "price" value =" <?=($row['price'])?>">
 <button type = "submit" name="addToCart">add to cart</button>
 </form>
 <form action="checkoutPage.php" method="POST">
     <button type="submit" name="checkout">checkout</button>
 </form>

<?php include "../templates/footer.php"; ?>