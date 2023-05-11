<?php
require "dbconfig.php";
$sql="select * from products";
$dbconn=connectToDb();
    $result=mysqli_query($dbconn,$sql);
    $products=array();
    while($row=mysqli_fetch_array($result)){
        $products[]=$row;
    }
    echo json_encode($products);

?>