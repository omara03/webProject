<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIKE PRODUCTS</title>
    <link rel="icon" href="Images/Logo/NIKE LOGO.png">
<style>

.products{
    display: flex;
    justify-content: center;
    align-items: center;
    color: black;
}



</style>


</head>
<body>
    <h1 style="display: flex; justify-content: center">NIKE PRODUCTS</h1>
<div class="products">


<?php
// viewUsers.php

// Connect to your database (replace these values with your database credentials)
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "eonia";

$conn = mysqli_connect($server, $user, $pass, $dbname,3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// Fetch users from the "users" table
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // Output data with lines between elements
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
        echo " Product Name: " . $row['NAME'] . " Previous Price: " . $row['PREVIOUSPRICE'] . " Price: " . $row['PRICE'] . " Frontface: " . $row['FRONTFACE'] . " Backface: " . $row['BACKFACE'] . " Description: " . $row['DESCRIPTION'] . " Color: " . $row['COLOR'] . " Type: " . $row['TYPE'] . " Sport: " . $row['SPORT'] . " Gender: " . $row['GENDER'] . "<br>" . "<br>";

        // Add a line between elements (except the last one)
        if ($row !== end($rows)) {
            echo '<div style="width: 100%; height: 5px; background-color: black; border: 5px solid black;"></div>';
        }
    }
} else {
    echo 'Empty database';
    //echo json_encode(array()); // Return an empty array if no users are found
}




$conn->close();
?>


</div>

    
</body>
</html>
