<?php

require "dbconfig.php";
$dbconn=connectToDb();

if(isset($_GET['userid']) && isset($_GET['productid']))
{
    $userid = $_GET['userid'];
    $productid = $_GET['productid'];

    // Check if product exists in cart
    $sql = "SELECT * FROM cart WHERE userid='$userid' AND productid='$productid'";
    $result=mysqli_query($dbconn,$sql);
    $row = mysqli_fetch_array($result);
    if(!$row){
        echo "Product not found in cart<br>";
        echo "Query: ".$sql."<br>";
        return;
    }

    // Reduce quantity by 1
    $quantity = $row['quantity'];
    if($quantity == 1){
        // If quantity is 1, delete the product from cart
        $sql = "DELETE FROM cart WHERE userid='$userid' AND productid='$productid'";
    } else {
        // Otherwise, reduce quantity by 1
        $quantity--;
        $sql = "UPDATE cart SET quantity=$quantity WHERE userid='$userid' AND productid='$productid'";
    }
    
    $result=mysqli_query($dbconn,$sql);
   
    if(!$result){
        echo "error removing product from cart:" . mysqli_error($dbconn);
    }
    else displayCart($dbconn,$userid);
}

?>
