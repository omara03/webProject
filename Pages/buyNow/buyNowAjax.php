<?php 
session_start();



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



            $email = $_SESSION["Email"];
            $price = $_SESSION["PRICE"];
            $name = $_SESSION["NAME"];
            // Retrieve the user's current number of items bought
            $sqlSelectItemsBought = "SELECT ITEMSBOUGHT FROM user WHERE EMAIL = '$email'";
            $resultItemsBought = mysqli_query($conn, $sqlSelectItemsBought);
            

            if ($resultItemsBought) {
                $row = mysqli_fetch_assoc($resultItemsBought);
                $currentItemsBought = $row['ITEMSBOUGHT'];
                
                // Increment the number of items bought
                $newItemsBought = $currentItemsBought + 1;
                
                // Update the database with the new value
                $sqlUpdateItemsBought = "UPDATE user SET ITEMSBOUGHT = '$newItemsBought' WHERE EMAIL = '$email'";
                $resultUpdateItemsBought = mysqli_query($conn, $sqlUpdateItemsBought);
                


                // Retrieve the user's current number of items bought
            $sqlSelectTotalPrice = "SELECT TOTALPRICE FROM user WHERE EMAIL = '$email'";
            $resultTotalPrice = mysqli_query($conn, $sqlSelectTotalPrice);
            

            if ($resultTotalPrice) {
                $row = mysqli_fetch_assoc($resultTotalPrice);
                $currentTotalPrice = $row['TOTALPRICE'];
                
                // Increment the number of items bought
                $newTotalPrice = $currentTotalPrice + $price;
                
                // Update the database with the new value
                $sqlUpdateTotalPrice = "UPDATE user SET TOTALPRICE = '$newTotalPrice' WHERE EMAIL = '$email'";
                $resultUpdateTotalPrice = mysqli_query($conn, $sqlUpdateTotalPrice);
            }
                
                
            } else {
                echo "Error selecting number of items bought: " . mysqli_error($conn);
            }
            
            ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 50px;
    }

    #confirmationMessage {
      font-size: 18px;
      margin-bottom: 20px;
    }

    #okButton {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      background-color: #4caf50;
      color: white;
      border: none;
      border-radius: 5px;
    }

    #okButton:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
    
<div id="confirmationMessage">
  <p>Your product will arrive soon. Press "OK" to continue.</p>
</div>

<button id="okButton" onclick="proceedToNextPage()">OK</button>

<script>
  function proceedToNextPage() {
    // Replace 'target_page.html' with the URL of the page you want to navigate to.
    window.location.href = '../../indexUser.php';
  }
</script>

    
</body>
</html>