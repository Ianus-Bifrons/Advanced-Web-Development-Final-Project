<?php
include "dbconfig.php";
session_start();
$userid=$_SESSION['userid'];
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

      .navbar .container-fluid{
        text-align: center;
      }

      .navbar .navbar-collapse{
        text-align: center;
        margin-left: 460px;
      }

      .btn-danger{
        display: block;
        margin-left: 45%;
        width: 150px;
        height: 60px;
      }

      .alert{
        position: fixed;
        margin-top: 20px;
        margin-left: 35.5%;
        width: 30%;
        border-radius: 100px;
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

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <table class="table">
        <?php displayCart($dbconn, $userid); ?>
      </table>
    </div>
  </div>
</div>

<button class="btn btn-danger" id="clear-cart">Purchase Cart</button>
<div id="purchase-message" class="alert" style="display:none; text-align:center; "></div>


<script>
$().ready(function() {
  $(".table").on('click',".btn-primary",function(){
    var productId = $(this).prev().prev().prev().prev().prev().prev().text();
    var userId = "<?php echo $userid ?>";
    var quantity = $(this).prev().text().split(' ')[1];
    $.ajax({
      url:"deletefromcart.php",
      data:{userid: userId, productid: productId, quantity: quantity},
      success: function(response){
        $("table").empty()
        $("table").append(response)
      }
    })
  })
})

$(document).ready(function() {
  // Clear Cart button clicked
  $("#clear-cart").click(function() {
    var userId = "<?php echo $userid ?>";
    $.ajax({
      url: "purchasecart.php",
      data: {userid: userId},
      success: function(response){
        if (response === 'Thank you for your purchse!') {
          $("table").empty()
          $("table").append(response)
          $("#purchase-message").removeClass('alert-danger')
          $("#purchase-message").addClass('alert-success')
          $("#purchase-message").text('Items Purchased Successfully!').show()
        }else{
          $("#purchase-message").removeClass('alert-success')
          $("#purchase-message").addClass('alert-danger')
          $("#purchase-message").text('Error Purchasing Your Items.').show()
        }
      },
      error: function(){
        $("#purchase-message").removeClass('alert-success')
        $("#purchase-message").addClass('alert-danger')
        $("#purchase-message").text('Error Purchasing Your Items.').show()
      }
    })
  })
})


</script>
</body>
</html>