<?php
  /*$users = array(
    array("account" => "admin01", "password" => "123", "mission" => "1"),
    array("account" => "user2", "password" => "123", "mission" => "2"),
    array("account" => "user3", "password" => "123", "mission" => "3"),
  );
  require ("includes/common.php");
  session_start();
 
    $account = $_POST["maccount"];
    $account=mysqli_real_escape_string($con,$account);

    $password = $_POST["mpassword"];
    $password=mysqli_real_escape_string($con,$password);


    $query="SELECT admin_ID,admin_Account,admin_password from admins where admin_Account='$account' and  admin_password='$password'";
    $result=mysqli_query($con,$query);
    $num=mysqli_num_rows($result);
    
    if ($num==0) {
      echo "login fail";
      return;
    }
    else {
      switch ($users['mission']) {
        case '1': {
          header( 'Location: index.php' );
          break;
        }
        case '2': {
          header( 'Location: 2.php' );
          break;
        }
        case '3': {
          header( 'Location: 3.php' );
          break;
        }
        default: {
          break;
        }
      }
    }*/
    $users = array(
      array("account" => "admin01", "password" => "123", "mission" => "1"),
      array("account" => "admin02", "password" => "123", "mission" => "2"),
      array("account" => "admin03", "password" => "123", "mission" => "3"),
    );
    if (isset($_POST["maccount"]) && isset($_POST["mpassword"]) ) {
      $account = $_POST["maccount"];
      $password = $_POST["mpassword"];
      $userData = null;
      foreach($users as $key => $val) {
        if ($val['account'] == $account) {
          $userData = $users[$key];
        }
      }
      if (!$userData) {
        echo "login fail";
        return;
      }
      if ($password == $userData['password']) {
        switch ($userData['mission']) {
          case '1': {
            header( 'Location: chat_management.php' );
            break;
          }
          case '2': {
            header( 'Location: ' );
            break;
          }
          case '3': {
            header( 'Location: ' );
            break;
          }
          default: {
            break;
          }
        }
      } else {
        echo "login fail";
      }
    }
?>