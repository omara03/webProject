<?php
$cartID = $_POST['id'];
echo $cartID;

include_once('Connection.php');
echo $_SESSION["totalitems"];

if(!$conn)
{
    echo "Failed to connect!";
    die();
}
else{
    $sql = "SELECT * FROM cart WHERE ID = '$cartID';";
    if(mysqli_num_rows(mysqli_query($conn,$sql)) == 1)
    {        
        $sqlDelete = "DELETE FROM cart WHERE ID = '$cartID'";
        if (mysqli_query($conn, $sqlDelete)) {
            echo "Deletion success!";
        } else {
            echo "Error deleting user: " . mysqli_error($conn);
        }
        
        //header("location:homepage.html");
    }
    else
    {
        echo "Incorrect credentials!";

    }

    mysqli_close($conn);

}
echo json_encode(['message' => $_SESSION["totalitems"]]);
?>