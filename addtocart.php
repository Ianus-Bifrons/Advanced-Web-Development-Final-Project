<?php
include "dbconfig.php";
if(isset($_GET['userid']) && isset($_GET['productid']))
{
    $userid = $_GET['userid'];
    $productid = $_GET['productid'];
    $dbconn=connectToDb();
    
    // Check if product already exists in cart for this user
    $sql = "SELECT * FROM cart WHERE userid = '$userid' AND productid = '$productid'";
    $result = mysqli_query($dbconn, $sql);
    
    if(mysqli_num_rows($result) > 0) {
        // Product already exists in cart, update quantity
        $row = mysqli_fetch_assoc($result);
        $cartid = $row['id'];
        $quantity = $row['quantity'] + 1;
        $sql = "UPDATE cart SET quantity = '$quantity' WHERE id = '$cartid'";
        $result = mysqli_query($dbconn, $sql);
        if(!$result){
            echo "Error Updating Quantity in Cart". mysqli_error($dbconn);
        }
        else echo "Quantity Updated!";
    } else {
        // Product doesn't exist in cart, add it
        $sql="INSERT INTO cart (userid, productid, quantity) VALUES ('$userid', '$productid', 1)";
        $result=mysqli_query($dbconn,$sql);
        if(!$result){
            echo "Error Adding this Product to Cart". mysqli_error($dbconn);
        }
        else echo "Added to Cart!";
    }
}

?>