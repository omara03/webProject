<?php

include_once('Connection.php');


if(!$conn)
{
    echo "Failed to connect!";
    die();
}
else
{
    $fullName = $_POST['fullName'];
    $Address = $_POST['Address'];
    $Email = $_POST['emailSignUp'];
    $Password = $_POST['passwordSignUp'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
     
        $sql = "SELECT * FROM user WHERE Email = '$Email';";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1)
        {
            echo 
            "<script>
            // Your JavaScript code here...
            alert('Account already signed in');
            </script>";
            // header('location: index.html');
        }
    
    else
    {
        $sql = "INSERT INTO user (FULLNAME,ADDRESS,EMAIL,PASSWORD) VALUES ('$fullName','$Address','$Email','$Password');";
        if(mysqli_query($conn,$sql))
        {
            echo "Sign Up Complete";

        }
        else
        {
            echo 
            "<script>
            // Your JavaScript code here...
            alert('Signing Up failed');
          </script>";
        }
    
        mysqli_close($conn);
    }
}
}   
?>