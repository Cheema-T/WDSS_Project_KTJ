
<?php
session_start();

include "../templates/header.php"; ?>

<body>
<h1> Search below!</h1>
    <form method="POST" >
        <label for="searchQuery">Search for a book:</label>
        <input type="text" name="searchQuery" placeholder="Enter title, author or genre">
        <button type="submit" name = "submit">Search</button>
    </form>
<?php


include "../src/database.php";
include "../classes/book.php";


  if(isset($_POST['submit'])){
         $searchQuery = $_POST['searchQuery'];

         $query = "SELECT * FROM books WHERE title =:query OR genre = :query OR  author = :query";
         $statement = $pdo->prepare($query);
         $statement->bindValue(':query', $searchQuery , PDO::PARAM_STR);
         $statement->execute();

         $bookA = new book();


        if($statement->rowCount() >0){
        while($row = $statement-> fetch(PDO::FETCH_ASSOC)){
        if($row){
         $bookA->setBookIBAN($row['IBAN']);
         $bookA->setBookTitle($row['title']);
         $bookA->setBookAuthor($row['author']);
         $bookA->setBookPrice($row['price']);
         $bookA->setBookGenre($row['genre']);
         $bookA->displayBook();

         echo '<form method = "POST">
                  <input type = "hidden" name = "IBAN" value ="'. $row['IBAN'].'">
                  <input type = "hidden" name = "title" value ="' .$row['title'].'">
                  <input type = "hidden" name = "price" value ="'.$row['price'].'">
                  <button type = "submit" name="addToCart">add to cart</button>
              </form>';
         }
     }
        }else {
            echo "<p>no book found, please try a different search</p>";
        }
}

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addToCart'])){

        $book = [
        'IBAN' => $_POST['IBAN'], 'title' =>$_POST['title'], 'price' => $_POST['price']
    ];
     echo "item added to cart";
    }
 ?>
  <form action="cart.php" method="POST">
      <button type="submit" name="cart">cart</button>
  </form>

 <?php include "../templates/footer.php"; ?>