<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chroma</title>
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
    
    <img src="images/exh3.jpg" style="width: 80%; height: 80%; margin-left: 10%; border-radius: 300px; margin-top: 1%;">
    <div class="exhibition_content_container">
        <h2 class="exhibition_title">Cubism and the Trompe l'Oeil Tradition</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="exhibition_display_container">
        <img class="mySlides" src="images/cubism1.jpg" style="width:100%">
        <img class="mySlides" src="images/cubism2.jpg" style="width:100%">
        <img class="mySlides" src="images/cubism3.jpg" style="width:100%">
        <img class="mySlides" src="images/cubism4.jpg" style="width:100%">
        <img class="mySlides" src="images/cubism5.jpg" style="width:100%">
        <img class="mySlides" src="images/cubism6.jpg" style="width:100%">

        <button class="slide_button_left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="slide_button_right" onclick="plusDivs(1)">&#10095;</button>
    </div>
    
    <script src="main.js"></script>

</body>
</html>