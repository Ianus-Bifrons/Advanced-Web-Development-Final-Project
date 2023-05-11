<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit the Thessaloniki Art Museum</title>
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
    
    <section id="building">
        <div class="building_container">
            <h2 class="building_title">Our Building</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <table>
            <tr>
              <th>DAYS</th>
              <th>HOURS</th>
            </tr>
            <tr>
              <td>MON/WED/FRI</td>
              <td>10:00 - 18:00</td>
            </tr>
            <tr>
              <td>TEU/THU</td>
              <td>10:00 - 21:00</td>
            </tr>
            <tr>
              <td>SAT</td>
              <td>10:00 - 17:00</td>
            </tr>
            <tr>
              <td>SUN</td>
              <td>CLOSED</td>
            </tr>
          </table>
          <img src="images/building1.jpg" alt="">
    </section>
    <section id="tickets_container">
        <div id="tickets">
            <h2>Tickets</h2>
            <p>See the prices below and buy your ticket online or in person.</p>
            <table>
                <tr>
                  <td>Adult</td>
                  <td>20$</td>
                </tr>
                <tr>
                  <td>Senior(65 and over)</td>
                  <td>15$</td>
                </tr>
                <tr>
                  <td>Students</td>
                  <td>10$</td>
                </tr>
                <tr>
                  <td>Children(12 and under)</td>
                  <td>Free</td>
                </tr>
              </table>
              <button onclick="buyTicket()">Buy ticket</button>
        </div>
    </section>
    
    
</body>
</html>