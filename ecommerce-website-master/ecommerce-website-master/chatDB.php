
<?php
if (isset($_POST['submit'])) {
    $chatText=$_POST['chatText'];
    
    $dsn = 'mysql:dbname=ecommerce;host=localhost';
    $pdo = new PDO($dsn,'root','');
    $result = $pdo->query("INSERT INTO chat (chatText)
                  VALUES ('$chatText')");
    if ($result) {
        echo "<script> alert('上傳成功');
                location.href='index.php';
              </script>";
        
    } else {
        echo "請求失敗,請重試";
        }
}
?>
    
  