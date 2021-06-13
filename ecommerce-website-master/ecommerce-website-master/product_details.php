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
    <style>
        .followButton{position:relative;}
        .top{
            margin:auto;
            width:60vw;
            text-align:right;
            padding:15vh 0 0 0; 
        }
        .chat{
            margin-top:5px;
            margin-bottom:5px; 
        }
    </style>    
</head>
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<div class="container" style="margin-top:100px">
    <div class="row">
        <!-- database reader --> 
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

foreach($result as  $row){
    if($row["id"] == 0){
        echo       '<div class="col-sm-6">';
        echo           '<img src="img_display.php?id=<?php echo $row["id"]; ?>';
        echo       '</div>';
        echo       '<div class="col-sm-6">';
        echo            "<h2>{$row["name"]}</h2>";
        echo            '<hr size="8px" align="center" width="100%">';
        echo            '<h5>欲交換商品</h5>';
        echo            "{$row["change_name"]}";
        echo           '<hr size="8px" align="center" width="100%">';
        echo            '<p>商品描述</p>';
        echo            "{$row["description"]}";
        echo           '<hr size="8px" align="center" width="100%">';
        echo            '<div>';         
        echo        '</div>';
        echo    '</div>';
        echo'</div>';
        }
     }

     // close connect 
     $conn = null ;
?>

<!-- datareader end -->


                <div class="followButton">
                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">關注</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>關注</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">關注</a><p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$dsn = 'mysql:dbname=ecommerce;host=localhost';
// create connect 
$conn = new PDO($dsn, $username, $password);
// Check connection

$result =$conn->query('select * from chat');

foreach($result as  $row){      
        echo    '<div>';
        echo        '<div class="chat">';
        echo            '<div class="container">';
        echo                '<table class="table">';
        echo                    '<tbody>';
        echo                        '<tr>';
        echo                            "<td width:25%>{$row["email_id"]}</td>";
        echo                            "<td width:75%>{$row["chatText"]}</td>";
        echo                        '</tr>';
        echo                    '</tbody>';
        echo                '</table>';
        echo            '</div>';
        echo        '</div>';
        echo    '</div>';
    
}
$conn = null ;
?>   
    <div class="container">
    <form action="chatDB.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="comment">留言:</label>
        <textarea type ="text" class="form-control" rows="5" id="comment" name="chatText"></textarea>
      </div>
      <input type="submit" name="submit" value="送出" class="btn btn-primary"></input>
    </form>
  </div>


<br>
<?php include 'includes/footer.php'?>
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