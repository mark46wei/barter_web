<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=file]{
    padding: 30px;
    border-radius: 4px;
    resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 1px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  width : 100%;
  font-size: 24px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.contain{
  border-radius: 1px;
  background-color: #f2f2f2;
  padding: 40px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>

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
<?php
include 'includes/header_menu.php';
?>
<div class="d-flex justify-content-center">
<div class=" col-md-6  my-5 table-responsive p-5">
            
<div class="contain">
  <form method="post" action="uploadDB.php" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="fname">上傳商品名稱</label>
    </div>
    <div class="col-75">
      <input type="text" name = "form_name" placeholder="商品名稱" >
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">交換物品</label>
    </div>
    <div class="col-75">
      <input type ="text" name = "form_change" placeholder="欲交換商品名稱及描述">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="subject">描述</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="form_description" placeholder="商品描述" style="height:200px"></textarea>
    </div>
  <div class = "row">
    <div class="col-25">
      <label for="country">上傳照片</label>
    </div>
    <div class="col-75">
      <input type="file" name="form_data">
    </div>
   </div>
        <input type="submit"  name="submit" value="submit">
    </form>
</div>
             
                 
            </div>
        </div>

        <!--footer -->
         <?php include 'includes/footer.php'?>
        <!--footer end-->

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

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
