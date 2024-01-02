<?php

include_once('Connection.php');

if(!$conn)
{
    echo "Failed to connect!";
    die();
}
else{
    $Email = $_POST['Email'];
    $fullName = $_POST['fullname'];
    $Address = $_POST['address'];
    $Emailedit = $_POST['emailEdit'];
    $Password = $_POST['Password'];



    $sql = "SELECT * FROM user WHERE Email = '$Email';";

    if(mysqli_num_rows(mysqli_query($conn,$sql)) == 1)
    {        
        $sqlUpdatename = "UPDATE user SET FULLNAME = '$fullName' WHERE Email = '$Email';";
        $sqlUpdateAddress = "UPDATE user SET ADDRESS = '$Address' WHERE Email = '$Email';";
        $sqlUpdateEmail = "UPDATE user SET EMAIL = '$Emailedit' WHERE Email = '$Email';";
        $sqlUpdatePassword = "UPDATE user SET PASSWORD = '$Password' WHERE Email = '$Email';";
        


        if($fullName!=null){
            mysqli_query($conn,$sqlUpdatename);
            
        }
        if($Address!=null){
            mysqli_query($conn,$sqlUpdateAddress);
            
        }
        
        if($Password!=null){
            mysqli_query($conn,$sqlUpdatePassword);
            
        }
        if($Emailedit!=null){
            mysqli_query($conn,$sqlUpdateEmail);
            
        }
        
        if($fullName != null || $Address != null || $Emailedit != null || $Password != null){
            echo"Edit Success";
        }
        else{
            echo"Edit Failed";
        }

        
        //header("location:homepage.html");
    }
    else
    {
        echo "Incorrect credentials!";

    }

    mysqli_close($conn);

}
?>

