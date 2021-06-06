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
    <div class=" mt-5 ">
      <div class="row justify-content-around">
        <div class="col-md-5 ">
          <h3 class="text-warning pt-3 title">註冊前須知</h3>
          <hr />
          
          <p class="mt-2">平交易法相關條例<br>
          （一）獨占事業不得以不公平之方法，直接或間接阻礙他事業參與競爭，或對商品價格或服務報酬為不當之決定、維持或變更，或無正當理由，使交易相對人給予特別優惠，或其他濫用市場地位之行為。<br>
          （二）事業結合達一定規模者，應先向主管機關提出申報，如應事前提出申報而未申報、提出申報但於等待期間即逕行結合，或申報後經主管機關禁止其結合而為結合，或未履行主管機關對於結合決定所附加的負擔，將受禁止結合或其他必要之處分。<br>
          （三）禁止事業之聯合行為，惟合乎第15條例外規定情形，而有益於整體經濟與公共利益，並經申請主管機關許可者，不在此限。<br>
          （四）除有正當理由者外，事業就供給之商品或服務，不得限制其交易相對人再轉售時之價格。<br>
          （五）下列行為而有限制競爭之虞者，均在禁止之列：<br>
          以損害特定事業為目的，促使他事業對該特定事業斷絕供給、購買或其他交易之行為。<br>
          無正當理由對他事業給予差別待遇之行為。<br>
          以低價利誘或其他不正當方法，阻礙競爭者參與或從事競爭之行為。<br>
          以脅迫、利誘或其他不正當方法，使競爭者之交易相對人與自己交易之行為。<br>
          以脅迫、利誘或其他不正當方法，使他事業不為價格之競爭、參與結合或聯合之行為。<br>
          以不正當限制交易相對人之事業活動為條件，而與其交易之行為<br>
          （六） 禁止事業在商品或其廣告上為虛偽不實或引人錯誤之表示或表徵之行為。<br>
          （七）禁止事業為競爭之目的而陳述、散布足以損害他人營業信譽之不實情事。<br>
          （八） 禁止事業為其他足以影響交易秩序之欺罔或顯失公平之行為。<br><br>

          平交易法相關條例<br>
          第 一 章 總則<br>
          第 1 條:為維護交易秩序與消費者利益，確保自由與公平競爭，促進經濟之安定與繁榮，特制定本法。<br>
          第 2 條:本法所稱事業如下：一、公司。二、獨資或合夥之工商行號。三、其他提供商品或服務從事交易之人或團體。事業所組成之同業公會或其他依法設立、促進成員利益之團體，視為本法
          所稱事業。<br>
          第 3 條:本法所稱交易相對人，指與事業進行或成立交易之供給者或需求者。<br>
          第 4 條:本法所稱競爭，指二以上事業在市場上以較有利之價格、數量、品質、服務或其他條件，爭取交易機會之行為。<br>
          第 5 條:本法所稱相關市場，指事業就一定之商品或服務，從事競爭之區域或範圍。<br>
          第 6 條:本法所稱主管機關為公平交易委員會。本法規定事項，涉及其他部會之職掌者，由主管機關商同各該部會辦理之。<br>
          第 二 章 限制競爭<br>
          第 7 條:本法所稱獨占，指事業在相關市場處於無競爭狀態，或具有壓倒性地位，可排除競爭之能力者。二以上事業，實際上不為價格之競爭，而其全體之對外關係，具有前項規
          定之情形者，視為獨占。<br>
          第 8 條:事業無下列各款情形者，不列入前條獨占事業認定範圍：一、一事業於相關市場之占有率達二分之一。二、二事業全體於相關市場之占有率達三分之二。
          三、三事業全體於相關市場之占有率達四分之三。有前項各款情形之一，其個別事業於相關市場占有率未達十分之一或上一會計年度事業總銷售金額未達主管機關所公告之金額者，該事業不列入獨
          占事業之認定範圍。事業之設立或事業所提供之商品或服務進入相關市場，受法令、技術之限制或有其他足以影響市場供需可排除競爭能力之情事者，雖有前二項不列
          入認定範圍之情形，主管機關仍得認定其為獨占事業。<br>
          第 9 條:獨占之事業，不得有下列行為：一、以不公平之方法，直接或間接阻礙他事業參與競爭。二、對商品價格或服務報酬，為不當之決定、維持或變更。
          三、無正當理由，使交易相對人給予特別優惠。四、其他濫用市場地位之行為。<br>
          第 10 條:本法所稱結合，指事業有下列情形之一者：一、與他事業合併。二、持有或取得他事業之股份或出資額，達到他事業有表決權股份總數或資本總額三分之一以上。
          三、受讓或承租他事業全部或主要部分之營業或財產。四、與他事業經常共同經營或受他事業委託經營。五、直接或間接控制他事業之業務經營或人事任免。
          計算前項第二款之股份或出資額時，應將與該事業具有控制與從屬關係之事業及與該事業受同一事業或數事業控制之從屬關係事業所持有或取得他事業之股份或出資額一併計入。<br>
          詐欺法內容<br><br>
          第 339 條:意圖為自己或第三人不法之所有，以詐術使人將本人或第三人之物交付者
        ，處五年以下有期徒刑、拘役或科或併科五十萬元以下罰金。
          以前項方法得財產上不法之利益或使第三人得之者，亦同。前二項之未遂犯罰之。<br><br>
          請嚴格遵守以上條例</p>

          
        </div>
      </div>
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
