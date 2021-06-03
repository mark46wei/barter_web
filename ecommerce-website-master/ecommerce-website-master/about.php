<?php
require ("includes/common.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Planet Shopify | Online Shopping Site for Men</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
  <link rel="stylesheet" href="style.css">
</head>
<body style="overflow-x:hidden; padding-bottom:100px;">
  <?php
        include 'includes/header_menu.php';
    ?>
  <div>
    <div class="container mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 mt-3">
          <h3 class="text-warning pt-3 title">我們是誰?</h3>
          <hr />
          <img
            src="https://th.bing.com/th/id/OIP.bRh2h3W8KnVqb52WsaOWYgHaHa?pid=ImgDet&rs=1"
            class="img-fluid d-block rounded mx-auto image-thumbnail">
          <p class="mt-2">我們是就讀於逢甲大學二年級的學生.我們這組溪王可以由系統分析與設計這堂課來了解在市面上的各種網頁與APP的設計方向與設計方法等資訊。</p>
        </div>
        <div class="col-md-5 mt-3">
          <span class="text-warning pt-3">
            <h1 class="title">我們所追求的</h1>
            <h3>動機與目的</h3>
          </span>
          <hr>
          <p>以物易物又稱之為物物交換，是有社會契約或明確協議條件下的交換價值模式，用自己擁有的物品以換取別人的物品，是一種現有貿易模式出現之前已有的交易方式，人類在使用貨幣作為買賣之前，就已經懂得以物易物。近年來由於電子商務的快速發展，加上環保意識的高漲，使得以物易物重新回到我們的生活當中。然而在以物易物網的龐大資料中，要尋找能夠滿足使用者的需求，意即構成雙重需求的偶合，以達成交換的情況相當的不容易。茲將本專題的動機與目的分述如后。一、專題動機隨著網路電子商務的興起以及環保意識的高度抬頭，以物易物再次回到我們的現實生活當中，加上以物易物又可以免除電子商務中的金錢交易行為，在不景氣的環境之下，是一項省錢又環保的交易行為。以物易物換法更是沒有任何侷限。「有人以金門的高粱酒交換蘇格蘭的威士忌，以屏東海邊的別墅交換南投山上的別墅，互相交換鑰匙，換取一年不同的生活模式」，以物易物的交易真是無奇不有，萬物皆可換，以物易物的再次興起到底有什麼原因呢？這樣的交易又有什麼好處？交換成功的秘訣又是什麼？基於種種的疑問，本專題研究將對以物易物做一個深入探討。二、專題目的金錢交易是人類取得生活必須品的基礎，沒有交易就沒有貨源的交流，沒有貨源的交流就沒有所謂的基本民生物質的取得，基於人類的生活需求，從古至今交易一直是生活中不可或缺的行為，金錢交易流通廣泛便捷，然而除了金錢交易外，對於現代人來說以物易物又是一個什麼樣的交易模式呢？
因此本組的主題是用「以物易物」的模式，跳脫出諸多大同的交易平台，展現出其獨特的地方，滿足將不需使用的物品，交換給需要者使用。不僅是金錢上的節省，同時也達到不用花一毛錢就可以實現夢想。

          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="container pb-3">
  </div>
  <div class="container mt-3 d-flex justify-content-center card pb-3 col-md-6">

    <form class="col-md-12" action="https://formspree.io/EnterYourEmail" method="POST" name="_next">
      <h3 class="text-warning pt-3 title mx-auto">聯繫表格</h3>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email"
          name="email">
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea1">訊息</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="5"></textarea>
      </div>
      <input type="hidden" name="_next" value="http://localhost/foody/about.php" />
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
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
  $(document).ready(function () {
    $('[data-toggle="popover"]').popover();
  });
  $(document).ready(function () {

    if (window.location.href.indexOf('#login') != -1) {
      $('#login').modal('show');
    }

  });
</script>
<?php if(isset($_GET['error'])){ $z=$_GET['error']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
<?php if(isset($_GET['errorl'])){ $z=$_GET['errorl']; echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>"; echo "
<script type='text/javascript'>alert('".$z."')</script>";} ?>
</html>
