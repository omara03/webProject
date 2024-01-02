<?php
session_start();

            // Retrieve the product ID from the URL
            $productid = isset($_GET['id']) ? $_GET['id'] : null;


            // Connect to your database (modify as per your database connection)
            $server = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "eonia";
            $conn = mysqli_connect($server, $user, $pass, $dbname,3307);
            
            if (!$conn) {
                echo "Failed to connect!";
                die();
            }
            else
            {
                // Fetch product details from the database based on the product ID
             $sql = "SELECT * FROM product WHERE ID = $productid";
            $result = mysqli_query($conn,$sql);
            $productDetails = array();
            if ($result->num_rows > 0) {
                while($productDetails = mysqli_fetch_assoc($result))
                {
                    $name = $productDetails['NAME'];
                    $_SESSION["NAME"] = $name;
                    // $previousprice = $productDetails['PREVIOUSPRICE'];
                    $price = $productDetails['PRICE'];
                    $_SESSION["PRICE"] = $price;
                    // $frontface = $productDetails['FRONTFACE'];
                    // $backface = $productDetails['BACKFACE'];
                    // $description = $productDetails['DESCRIPTION'];
                    // $color = $productDetails['COLOR'];
                }

                // Display product details dynamically
                
                // ... (display other product details)
            } else {
                // Product not found, display a message or redirect to an error page
                echo '<p>Product not found.</p>';
            } 

            // Close the database connection
            mysqli_close($conn);
            }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy now '<?php echo $name ?>'!</title>
    <link rel="icon" href="../../../Images/Logo/NIKE LOGO.png">
    <link rel="stylesheet" href="buyNow.css">
    
</head>
<body>
<div class="bg">
    <div class="formbuyNow">
    <h1>Payment Form</h1>
    
    <form action="buyNowAjax.php" method="post" onsubmit="return validateForm()">


        <label for="name">Name on Card:</label><br>
        <input type="text" id="name1"placeholder="Name on card" name="cardname" required><br><br>

        <label for="card_number">Card Number:</label><br>
        <input type="text" id="cardnumber" name="cardnumber" placeholder="0000-0000-0000-0000" required><br><br>

        <label for="expiry_date">Expiry Date (MM/YYYY):</label><br>
        <input type="text" id="expirydate" name="expirydate" placeholder="MM/YYYY" required><br><br>

        <label for="cvv">CVV:</label><br>
        <input type="text" id="cvv"  placeholder="CVV" name="cvv" required><br><br>

        <button type="submit" id="payNowButton">Pay now!</button>
        </form>
        </div>
    <script>
        function validateForm() {
            
            // Get the name on card value
            var nameOnCard = document.getElementById("name").value;

            // Check if the name on card contains only alphabets
            if (!/^[A-Za-z ]+$/.test(nameOnCard)) {
                alert("Please enter a valid name containing only alphabets.");
                return false;
}

            // Get the card number value
            var cardNumber = document.getElementById("cardnumber").value;
            

            // Check if the card number is numeric and has length 16
            if (!/^\d+$/.test(cardNumber) || cardNumber.length !== 16) {
                alert("Please enter a valid numeric card number with length 16.");
                return false;
            } 

            // Get the input value
            var expiryDate = document.getElementById("expirydate").value;

            // Define a regular expression pattern for MM/YYYY format
            var pattern = /^(0[1-9]|1[0-2])\/\d{4}$/;

            // Check if the input matches the pattern
            if (!pattern.test(expiryDate)) {
                alert("Please enter a valid expiry date in MM/YYYY format.");
                return false;
            }

            // Get the current date
            var currentDate = new Date();

            // Get the input values
            var splitDate = expiryDate.split('/');

            // Convert input values to numbers
            var inputMonth = parseInt(splitDate[0], 10);
            var inputYear = parseInt(splitDate[1], 10);

            // Check if the expiry date is before January 2024
            if (inputYear < 2024 || (inputYear === 2024 && inputMonth < 1)) {
                alert("Expiry date must not be before January 2024.");
                return false;
            }

            // Get the CVV value
            var cvv = document.getElementById("cvv").value;

            // Check if CVV is numeric and has length 3 or 4
            if (!/^\d+$/.test(cvv) || (cvv.length !== 3 && cvv.length !== 4)) {
                alert("Please enter a valid numeric CVV with length 3 or 4.");
                return false;
                
            }
            




            var xhr = new XMLHttpRequest();
            var email = $_SESSION["Email"];
               
            xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log(xhr.responseText);
            } else {
                console.error("Ajax request failed");
            }
        }
    }

    xhr.open("POST", "buyNowAjax.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xhr.send("Email=" + email);




            return true; // Form is valid
        }
    </script>
     </div>
</body>
</html>