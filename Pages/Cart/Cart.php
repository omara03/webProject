<?php 
session_start();

            // Retrieve the product ID from the URL
            $productid = isset($_GET['id']) ? $_GET['id'] : null;
            
            $email= $_SESSION["Email"];
            $poductname= $_SESSION["PRODUCTNAME"];
            $productprice= $_SESSION["PRODUCTPRICE"];
            $producttype= $_SESSION["PRODUCTTYPE"];
            $productsport= $_SESSION["PRODUCTSPORT"];
            $productfrontface= $_SESSION["FRONTFACE"];


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
            $sql = "INSERT INTO cart (USER_EMAIL,BOUGHT,NAME,PRICE,TYPE,SPORT,FRONTFACE) VALUES ('$email','0','$poductname','$productprice','$producttype','$productsport','$productfrontface');";
          
            if(mysqli_query($conn,$sql))
        {
       
            
            
        }
        else
        {
            echo 
            "<script>
            // Your JavaScript code here...
            alert('Failed');
            </script>";
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
  <p>Product added to cart. Press "OK" to continue.</p>
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
