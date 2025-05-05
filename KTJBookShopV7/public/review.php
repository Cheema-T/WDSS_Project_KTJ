<?php include "../templates/header.php"; ?>


<h2>Write your own review</h2>
<form action="review.php" method="POST" class="review-form">
    <label for="name">Your Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="review">Your review:</label><br>
    <textarea id="review" name="review" rows="4" required></textarea><br><br>

    <button type="submit">Submit Review</button>
</form>

    
    <h1>What our customers think</h1>
 <div class="revtext">
    <h3>James Cage</h3>
    <p>This is a geat place to get all the books</p>
    <br>
    <h3>Daisy White</h3>
    <p>I bought my niece alot of books from here</p>
    <br>
    <h3>Jordan Brown</h3>
    <p>This place always has book that are out of stock in other places</p>
    <br>
    <h3>Kimmy Wilson</h3>
    <p>My favourite place to get books for cheap</p>
    <br>
    <h3>Johnny Goodman</h3>
    <p>10/10 custom service and great website</p>
    <br>
    <h3>Eddie Dove</h3>
    <p>The selection of books is amazing</p>
</div>

<?php include "../templates/footer.php"; ?>


