<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thessaloniki Art Museum</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>
<body>
    <nav>
        <div class="container_nav">
            <a href="login.php" class="nav_logo"><img src="images/logo.png" alt="nav_logo"></a>
            <ul class="nav_links">
                <li><a href="visit.php">Visit</a></li>
                <li><a href="exhibitions.php">Exhibitions</a></li>
                <li><a href="collection.php">Collection</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Shop</a></li>
            </ul>
        </div>
    </nav>

    <div class="front_page">
      <section class="banner" >
        <div class="banner_content">
          <h1>Welcome to the Thessaloniki Museum of Art</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu.</p>
          <a href="visit.php" class="button">Plan your visit</a>
        </div>
      </section>

      <section id="exhibition_example">
        <div class="exhibition_intro">
          <h2 class="exhibition_title">Now On View</h2>
          <p class="exhibition_subtitle">Explore some of our most popular exhibitions.</p>
        </div>
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
      </section>

    </div>
</body>

<footer>
  <div class="footer_content">
    <p> ©2022 Thessaloniki Museum of Art </p>
  </div>
</footer>

</html>