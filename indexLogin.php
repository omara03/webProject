<?php
session_start();
include_once('Connection.php');

$adminEmail = "admin@gmail.com";
$adminPassword = "12345";

if (!$conn) 
{
    echo "Failed to connect!";
    die();
} 
else 
{

    $Email = $_POST['emailLogin']; // Stores the retreived data from the form (of name Email) in variable $Email
    $Password = $_POST['passwordLogin']; // Stores the retreived data from the form (of name Password) in variable $Password


     echo "Connection success!";

     if ($Email == $adminEmail && $Password == $adminPassword)
     {

        echo 
        "<script>
        // Your JavaScript code here...
        alert('test');
        </script>";

        header ("location: indexAdmin.html");
        exit;
     }

     else
     {

         if ($_SERVER["REQUEST_METHOD"] == "POST") 
         {
     
             $sql = "SELECT * FROM user WHERE Email = '$Email' AND password = '$Password';";
             $result = mysqli_query($conn, $sql);
     
             if ($result && mysqli_num_rows($result) == 1) 
             {
                $_SESSION["Email"]=$Email;



                 $row = mysqli_fetch_assoc($result);
                 echo "Login success! Welcome " . $row['FULLNAME'];
                 // Redirect to the user page
                 header("location: indexUser.php");
             } else 
             {
                 echo "Incorrect credentials!";
                 // Redirect to the login/sign up forms page
                 header("location: index.php");
                 exit; // Ensure the script stops executing after the header is sent
             }
         }
     
         mysqli_close($conn);
     }
}
?>