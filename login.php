<?php 
require "dbconfig.php";
$sqlconn=connectToSql();
createDb($sqlconn);
$dbconn=connectToDb();
createTables($dbconn);
insertSampleData($dbconn)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .btn-actions{
      text-align: center;
      margin-top: 30px;
    }

    .btn-actions p{
      margin-top: 30px;
    }
</style>
<body>
<nav>
    <div class="container_nav">
        <a href="index.php" class="nav_logo"><img src="images/logo.png" alt="nav_logo"></a>
        <ul class="nav_links">
            <li><a href="visit.php">Visit</a></li>
            <li><a href="exhibitions.php">Exhibitions</a></li>
            <li><a href="collection.php">Collection</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Shop</a></li>
        </ul>
    </div>
</nav>

<form style="width:50%;margin:auto;padding-top:150px" action="authenticate.php" method="post">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="inputName" placeholder="Enter your name" name="name">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Enter your password" name="password">
  </div>
 
  <div class="btn-actions">
    <button type="submit" class="btn btn-primary">Log In</button>
    <p>Don't have an account? <br><a href="signup.php">Signup here</a></br></p>
  </div>

</form>
</body>
</html>