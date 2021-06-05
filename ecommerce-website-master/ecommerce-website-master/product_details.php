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
            margin-top:65px;
            margin-bottom:65px; 
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
        <div class="col-sm-6">
            <img src="images/watch1.jpg" alt="" class="img-fluid pb-1" >
        </div>
        <div class="col-sm-6">
            <h2>商品名稱</h2>
            <hr size="8px" align="center" width="100%">
            <h5>欲交換商品</h5>
            <hr size="8px" align="center" width="100%">
            <p>商品描述</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div>
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

      
    <div>
        <div class="chat">
            <div class="container">
                <table class="table">
                    <tbody>
                        <tr>
                            <td width="25%"><?php echo $_POST[""]; ?></td>
                            <td width="75%"><?php echo $_POST["text"]; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <div class="container">
    <form action="chatDB.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="comment">留言:</label>
        <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">送出</button>
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