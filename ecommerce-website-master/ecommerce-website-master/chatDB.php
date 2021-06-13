
<?php
session_start();
if (isset($_POST['submit'])) {
    $chatText=$_POST['chatText'];
    $email_id=$_SESSION['email'];
    
    $dsn = 'mysql:dbname=ecommerce;host=localhost';
    $pdo = new PDO($dsn,'root','');
    
    $result = $pdo->query("INSERT INTO chat (chatText,email_id)
                  VALUES ('$chatText','$email_id')");
    if ($result) {
        echo "<script> alert('留言成功');
                location.href='product_details.php';
              </script>";
        
    } else {
        echo "請求失敗,請重試";
        }
}
?>
    
  