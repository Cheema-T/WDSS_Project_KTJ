<?php include "../templates/header.php"; ?>

    <script>
        function showConfirmation(event) {
            event.preventDefault();
            document.getElementById("confirmationMessage").style.display = "block";
        }
    </script>
</head>
<body>
    <h1>Checkout</h1>

    <form method="POST" onsubmit="showConfirmation(event)">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name"><br>
        <br>

        <label for="address">Home Address:</label>
        <input type="text" id="address" name="address"><br>
        <br>

        <label for="cardNumber">Card Number:</label>
        <input type="text" id="cardNumber" name="cardNumber"><br>
        <br>

        <label for="expiryDate">Expiry Date:</label>
        <input type="text" id="expiryDate" name="expiryDate"><br>
        <br>

        <label for="cvv">CVV:</label>
        <input type="text" id="cvv" name="cvv"><br>
        <br>

        <button type="submit">Place Order</button>
    </form>

    <p id="confirmationMessage" style="display: none; color: green;"> Your order has been successfully placed! </p>

<?php include "../templates/footer.php"; ?>