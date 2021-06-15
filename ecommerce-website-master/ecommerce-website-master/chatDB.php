
<?php
session_start();
if (isset($_POST['submit'])) {
    $chatText=$_POST['chatText'];
    $email_id=$_SESSION['email'];
    $id =$_POST['items_id'];

    $dsn = 'mysql:dbname=ecommerce;host=localhost';
    $pdo = new PDO($dsn,'root','');
    
    $result = $pdo->query("INSERT INTO chat (chatText,email_id,goods_id)
                  VALUES ('$chatText','$email_id','$id')");
    if ($result) {
        echo "<script> alert('留言成功');</script>";
        header('location:product_details.php?id='.$id.'');
       
    } else {
        echo "請求失敗,請重試";
        }
}
?>
    
  