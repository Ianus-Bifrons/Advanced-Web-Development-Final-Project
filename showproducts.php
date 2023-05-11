<?php
session_start();
$userid= $_SESSION['userid'];
require "dbconfig.php";
$dbconn=connectToDb();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      img{
        display: block;
        object-fit: cover;
        width: 60px;
        float: left;
      }

      .navbar{
        background-color: #5e009e;
        border-radius: 100px;
        margin: 10px;
      }

      .navbar .navbar-collapse{
        text-align: center;
        margin-left: 460px;
      }

      .navbar-nav .nav-item:hover .nav-link {
        color: #5e009e;
      }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" class="nav_logo"><img src="images/logo.png" alt="nav_logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="showproducts.php" style="color: white; font-size: large;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="displaycart.php" style="color: white; font-size: large;">View Cart</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: white; font-size: large;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="row" id="products">

</div>
<script>
$().ready(function() {
$.ajax({
  url:"getproducts.php",
  success:function(data){
    let products=JSON.parse(data)
    for(let product of products){
      $("#products").append(`
        <div class="card col-3 m2" style="margin: 10px; text-align:center; margin-left:80px;">
          <img class="card-img-top" src="${product.imagelink}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">${product.name}</h5>
            <p class="card-text">${product.description}</p>
            <p class="card-text">Price: ${product.price}</p>
            <p class="card-text" hidden>${product.id}</p>
            <a href="#" class="btn btn-primary" style="background-color: #5e009e;">Add to cart</a>
          </div>
        </div>
      `)
    }
    
   $(".card-body").on('click',".btn-primary",function(){
    $.ajax({
      url:"addtocart.php",
      data:{userid:"<?php echo $userid?>", productid:$(this).prev().text()},
      success: function(response){
          alert(response)
      }
    })
  })
  }
})

})
</script>


</body>
</html>