<?php

include_once('Connection.php');

if(!$conn)
{
    echo "Failed to connect!";
    die();
}
else{
    $productName = $_POST['productName'];
    $Name = $_POST['Name'];
    $Previousprice = $_POST['Previousprice'];
    $Price = $_POST['Price'];
    $Frontface = $_POST['Frontface'];
    $Backface = $_POST['Backface'];
    $Description = $_POST['Description'];
    $Color = $_POST['Color'];
    $Type = $_POST['Type'];
    $Sport = $_POST['Sport'];
    $Gender = $_POST['Gender'];



    $sql = "SELECT * FROM product WHERE NAME = '$productName';";

    if(mysqli_num_rows(mysqli_query($conn,$sql)) >= 1)
    {        
        $sqlUpdatename = "UPDATE product SET NAME = '$Name' WHERE NAME = '$productName';";
        $sqlUpdatePreviousPrice = "UPDATE product SET PREVIOUSPRICE = '$Previousprice' WHERE NAME = '$productName';";
        $sqlUpdatePrice = "UPDATE product SET PRICE = '$Price' WHERE NAME = '$productName';";
        $sqlUpdateFrontFace = "UPDATE product SET FRONTFACE = '$Frontface' WHERE NAME = '$productName';";
        $sqlUpdateBackface = "UPDATE product SET BACKFACE = '$Backface' WHERE NAME = '$productName';";
        $sqlUpdateDescription = "UPDATE product SET DESCRIPTION = '$Description' WHERE NAME = '$productName';";
        $sqlUpdateColor = "UPDATE product SET COLOR = '$Color' WHERE NAME = '$productName';";
        $sqlUpdateType = "UPDATE product SET TYPE = '$Type' WHERE NAME = '$productName';";
        $sqlUpdateSport = "UPDATE product SET SPORT = '$Sport' WHERE NAME = '$productName';";
        $sqlUpdateGender = "UPDATE product SET GENDER = '$Gender' WHERE NAME = '$productName';";
        
        


        if($Previousprice!=null){
            // echo $Name;
            mysqli_query($conn,$sqlUpdatePreviousPrice);
            
        }
        if($Price!=null){
            mysqli_query($conn,$sqlUpdatePrice);
            
        }
        
        if($Frontface!=null){
            mysqli_query($conn,$sqlUpdateFrontFace);
            
        }
        if($Backface!=null){
            mysqli_query($conn,$sqlUpdateBackface);
            
        }
        if($Description!=null){
            mysqli_query($conn,$sqlUpdateDescription);
            
        }
        
        if($Color!=null){
            mysqli_query($conn,$sqlUpdateColor);
            
        }
        if($Type!=null){
            mysqli_query($conn,$sqlUpdateType);
            
        }
        if($Sport!=null){
            mysqli_query($conn,$sqlUpdateSport);
            
        }
        
        if($Gender!=null){
            mysqli_query($conn,$sqlUpdateGender);
            
        }
        if($Name!=null){
            mysqli_query($conn,$sqlUpdatename);
            
        }
        
        if($Previousprice != null || $Price != null || $Frontface != null || $Backface != null || $Description != null || $Color != null || $Type != null || $Sport != null || $Gender != null || $Name != null){
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

