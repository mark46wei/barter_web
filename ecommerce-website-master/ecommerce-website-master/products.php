<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet Shopify | Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
         <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>歡迎來到以物易物網</h1>
            <p>在這裡你能將你不需要的東西，換成你所需的物品</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">主頁</a></li>
                <li class="breadcrumb-item active" aria-current="page">產品</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>

    <!--menu list-->
<div class="row text-center" id="watch">
    
<?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ecommerce";

        $dsn = 'mysql:dbname=ecommerce;host=localhost';
        // create connect 
        $conn = new PDO($dsn, $username, $password);
        // Check connection

        $result =$conn->query('select * from my_img');

    foreach($result as $row){
    echo     '<div class="col-md-3 col-6 py-2">';
    echo        '<div class="card">';
    echo            '<img src="img_display.php?id='.$row["id"].' alt="" class="img-fluid pb-1">';
    echo        '<div class="figure-caption">';
    echo            "<h6>{$row["name"]}</h6>";
    echo            "<h6>{$row["id"]}</h6>";
    echo            "<h6>換取商品 :{$row["change_name"]}</h6>";
    echo            '<a href="product_details.php?id='.$row["id"].'" role="button" class="btn btn-secondary">瀏覽</a></p>';                 
    
    if (!isset($_SESSION['email'])) {
        echo '<p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">加入願望清單</a></p>';
        } else {
            if (check_if_added_to_cart(3)) {
            echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
            } else {
            echo '<p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">加入願望清單</a></p>';
           
        }
        }
    echo            '</div>';
    echo        '</div>';
    echo      '</div>';
    }

    
                       

?>
    </div>
</div>

      <!--menu list ends-->
      <!-- footer-->
        <?php include 'includes/footer.php'?>
      <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>