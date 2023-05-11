<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exhibitions of the Thessaloniki Art Museum</title>
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

    <div class="tab_container">
        <h2>Exhibitions</h2>
        <p>Here you will find all of the current, past and upcoming exhibitions at our museum.</p>
      
            <div class="exhibition_status">
                <button class="tablink" onclick="openPage('Current', this, 'white')">Current</button>
                <button class="tablink" onclick="openPage('Past', this, 'white')">Past</button>
                <button class="tablink" onclick="openPage('Upcoming', this, 'white')">Upcoming</button>
            </div>
      
        <div id="Current" class="tabcontent">
            <div id="col1">
                <h2><a href="chroma.php" class="chroma_exh">Chroma: Ancient Sculpture in Color</a></h2>
                <a href="chroma.php" class="chroma_exh"><img src="images/exh1.jpg" alt=""></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  Quisque interdum quam odio, quis placerat ante luctus eu.
                  Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
            </div>
            <div id="col2">
                <h2><a href="new_look.php" class="new_look_exh">A New Look at Old Masters</a></h2>
                <a href="new_look.php" class="new_look_exh"><img src="images/exh2.jpg" alt=""></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  Quisque interdum quam odio, quis placerat ante luctus eu.
                  Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
            </div>
            <div id="col3">
                <h2><a href="cubism.php" class="cubism_exh">Cubism and the Trompe l’Oeil Tradition</a></h2>
                <a href="cubism.php" class="cubism_exh"><img src="images/exh3.jpg" alt=""></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  Quisque interdum quam odio, quis placerat ante luctus eu.
                  Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
            </div>         
        </div>
      
        <div id="Past" class="tabcontent">
            <div id="col4">
                <h2><a href="tudors.php" class="tudors_exh">The Tudors</a></h2>
                <a href="tudors.php" class="tudors_exh"><img src="images/exh4.jpg" alt=""></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  Quisque interdum quam odio, quis placerat ante luctus eu.
                  Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
            </div>
        </div>
      
        <div id="Upcoming" class="tabcontent">
            <div id="col5">
                <h2><a href="beyond.php" class="beyond_exh">Beyond the Light</a></h2>
                <a href="beyond.php" class="beyond_exh"><img src="images/exh5.jpg" alt=""></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                  Quisque interdum quam odio, quis placerat ante luctus eu.
                  Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
            </div>
        </div>
      </div>
    
    
</body>
</html>