<?php

require "dbconfig.php";
$dbconn = connectToDb();

if(isset($_GET['userid']))
{
    $userid = $_GET['userid'];

    $sql = "SELECT * FROM cart WHERE userid='$userid'";
    $result = mysqli_query($dbconn, $sql);
    if(mysqli_num_rows($result) == 0){
        echo "empty";
        return;
    }

    // Clear cart for the specified user
    $sql = "DELETE FROM cart WHERE userid='$userid'";
    $result = mysqli_query($dbconn, $sql);

    if(!$result){
        echo "error";
    }else{
        echo "Thank you for your purchse!";
    }
    
}

?>
