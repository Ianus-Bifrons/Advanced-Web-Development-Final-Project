<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact the Thessaloniki Art Museum</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
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
    
    <div class="form_container">
        <form action="">
      
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
        
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        
            <input type="radio" id="adult" name="group" value="Adult">
            <label for="adult">Adult</label>
            <input type="radio" id="senior" name="group" value="Senior">
            <label for="senior">Senior</label>
            <input type="radio" id="student" name="group" value="Student">
            <label for="student">Student</label>
            <input type="radio" id="child" name="group" value="Child">
            <label for="child">Child</label>
      
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        
            <input type="submit" value="Submit" onclick="submitForm()">
      
        </form>
      </div> 
    
</body>
</html>