<?php  
function connectToSql(){
    $conn = mysqli_connect("localhost","root","");
    if(!$conn){
        echo mysqli_connect_error();
    }
    return $conn;
}

function createDb($sqlconn) {
    $sql="create database if not exists museum_shop";
    $result = mysqli_query($sqlconn,$sql);
    if (!$result){
        //echo mysqli_error($result);
    }
}

function connectToDb(){
    $conn = mysqli_connect("localhost","root","","museum_shop");
    if(!$conn){
        echo mysqli_connect_error();
    }
    return $conn;
}

function createTables($dbconn) {
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL
    )";
    $result = mysqli_query($dbconn, $sql);
    if (!$result) {
        echo "Error creating users table: " . mysqli_error($dbconn);
    }

    $sql = "CREATE TABLE IF NOT EXISTS products (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        description VARCHAR(255) NOT NULL,
        imagelink VARCHAR(255) NOT NULL,
        price  int(6)
    )";
    $result = mysqli_query($dbconn, $sql);
    if (!$result) {
        echo "Error creating products table: " . mysqli_error($dbconn);
    }

    $sql="CREATE TABLE IF NOT EXISTS cart(
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        userid INT(11) UNSIGNED,
        productid INT(11) UNSIGNED,
        FOREIGN KEY (userid) REFERENCES users(id),
        FOREIGN KEY (productid) REFERENCES products(id),
        quantity INT(6) UNSIGNED DEFAULT 1
    )";
    

    $result=mysqli_query($dbconn,$sql);
    if (!$result) {
        echo "Error creating cart table: " . mysqli_error($dbconn);
    }
}

function insertSampleData($sqlconn) {
    // Insert one sample users
    $sql = "SELECT COUNT(*) FROM users";
    $result = mysqli_query($sqlconn, $sql);
    $row = mysqli_fetch_array($result);
    $count = $row[0];
    if ($count == 0) {
        $sql = "INSERT INTO users (name, password) VALUES
                ('root', 'root'),
                ('admin', '123')";
        $result = mysqli_query($sqlconn, $sql);
        if (!$result) {
            echo "Error inserting sample users: " . mysqli_error($sqlconn);
        }
    }

    // Insert two sample products
    $sql = "SELECT COUNT(*) FROM products";
    $result = mysqli_query($sqlconn, $sql);
    $row = mysqli_fetch_array($result);
    $count = $row[0];
    if ($count == 0) {
    $sql = "INSERT INTO products (name, description, imagelink,price) VALUES
            ('Product 1', 'Description of product 1', 'images/shop1.png',60),
            ('Product 2', 'Description of product 2', 'images/shop2.png',55),
            ('Product 3', 'Description of product 3', 'images/shop3.png',40),
            ('Product 4', 'Description of product 4', 'images/shop4.png',65),
            ('Product 5', 'Description of product 5', 'images/shop5.png',40),
            ('Product 6', 'Description of product 6', 'images/shop6.png',35),
            ('Product 7', 'Description of product 7', 'images/shop7.png',35),
            ('Product 8', 'Description of product 8', 'images/shop8.png',35),
            ('Product 9', 'Description of product 9', 'images/shop9.png',40),
            ('Product 10', 'Description of product 10', 'images/shop10.png',70),
            ('Product 11', 'Description of product 11', 'images/shop11.png',65),
            ('Product 12', 'Description of product 12', 'images/shop12.png',80),
            ('Product 13', 'Description of product 13', 'images/shop13.png',20),
            ('Product 14', 'Description of product 14', 'images/shop14.png',120),
            ('Product 15', 'Description of product 15', 'images/shop15.png',15),
            ('Product 16', 'Description of product 16', 'images/shop16.png',35),
            ('Product 17', 'Description of product 17', 'images/shop17.png',75)";
        $result = mysqli_query($sqlconn, $sql);
        if (!$result) {
            echo "Error inserting sample products: " . mysqli_error($sqlconn);
        }
    }
}

function printProducts($dbconn){
    $sql="select * from products";
    $html="";
    $result=mysqli_query($dbconn,$sql);
    while($row=mysqli_fetch_array($result)){
        $html=$html."<div class='col-3 card m-1'>
        <img class='card-img-top' src='{$row['imagelink']}' alt='Card image cap' >
        <div class='card-body'>
          <p class='card-text' hidden>{$row['id']}</p>

          <h5 class='card-title'>{$row['name']}</h5>
          <p class='card-text'>{$row['description']}</p>
          <p class='card-text'>{$row['price']}</p>

          <a href='#' class='btn btn-primary'>Add to cart</a>
        </div>
      </div>";
    }
    echo $html;
}

function displayCart($dbconn, $userid){
    $sql = "SELECT products.id, products.name, products.description, products.imagelink, products.price, cart.quantity
            FROM products
            INNER JOIN cart ON products.id = cart.productid
            WHERE cart.userid = '$userid'";
    $result = mysqli_query($dbconn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <tr>
            <td>{$row[0]}</td>
            <td>{$row[1]}</td>
            <td>{$row[2]}</td>
            <td><img src='{$row[3]}'></td>
            <td>Price: {$row[4]}</td>
            <td>Quantity: {$row[5]}</td>
            <td class='btn btn-primary' style='background-color: #5e009e;'>Remove</td>
        </tr>";
    }
}



function signup($dbconn, $name, $password){
    // Escape special characters to prevent SQL injection
    $name = mysqli_real_escape_string($dbconn, $name);
    $password = mysqli_real_escape_string($dbconn, $password);

    // Check if username already exists
    $sql = "SELECT * FROM users WHERE name='$name'";
    $result = mysqli_query($dbconn, $sql);
    if(mysqli_num_rows($result) > 0) {
        echo "Username already taken.";
        return;
    }

    // Insert new user into database
    $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";
    $result = mysqli_query($dbconn, $sql);
    if($result) {
        echo "Sign up successful!";
    } else {
        echo "Error creating user: " . mysqli_error($dbconn);
    }
}


?>