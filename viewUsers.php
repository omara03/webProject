<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIKE USERS</title>
    <link rel="icon" href="Images/Logo/NIKE LOGO.png">
<style>

.users{
    display: flex;
    justify-content: center;
    align-items: center;
    color: black;
}



</style>


</head>
<body>
    <h1 style="display: flex;  justify-content: center">NIKE USERS</h1>
<div class="users">


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
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // Output data as JSON
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
        echo " Full Name: " . $row['FULLNAME'] . " Address: " . $row['ADDRESS'] . " Email: " . $row['EMAIL'] . " Password: " . $row['PASSWORD'] . " Items Bought: " . $row['ITEMSBOUGHT'] . " Total Price: " . $row['TOTALPRICE'] . "<br>" ."<br>";    }
    // echo json_encode($rows);
} else {
    echo 'Empty database';
    //echo json_encode(array()); // Return an empty array if no users are found
}

$conn->close();
?>


</div>

    
</body>
</html>
