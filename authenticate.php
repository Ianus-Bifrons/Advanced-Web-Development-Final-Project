<?php
require "dbconfig.php";

if(isset($_POST['name']) && isset($_POST['password'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $dbconn=connectToDb();
    $sql="select * from users where name = '$name' and password = '$password'";
    $result=mysqli_query($dbconn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
        session_start();

        $_SESSION['userid']=$row['id'];
        header('location:showproducts.php');
        
    }
    else header('location:index.php');

}
else header('location:index.php');
?>