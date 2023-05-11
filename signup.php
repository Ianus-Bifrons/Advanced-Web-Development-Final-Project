<?php
    // Define the sign-up function
    function signup() {
        // Get the user's input
        $name = $_POST['name'];
        $password = $_POST['password'];

        // Insert the user into the database
        $conn = new mysqli('localhost', 'root', '', 'museum_shop');
        $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";
        $conn->query($sql);
        $conn->close();

        // Redirect the user to the login page
        header('Location: login.php');
        exit;
    }

    // Check if the sign-up button was clicked
    if (isset($_POST['signup'])) {
        // Call the sign-up function
        signup();
    }
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
    <style>
        .signup_form{
            margin-top: 150px;
            margin-left: 300px;
            margin-right: 300px;
        }

        .signup-btn{
            text-align: center;
            margin-top: 30PX;
        }
    </style>
</head>
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
<form class="signup_form" method="post" action="">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control"  placeholder="Enter your password" name="password" required>
    </div>
    <div class="signup-btn">
        <button type="submit" class="btn btn-primary" name="signup">Signup</button>
    </div>
</form>

</body>
</html>