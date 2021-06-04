<?php
if (isset($_POST['submit'])) {
    $form_description = $_POST['form_description'];
    $form_name = $_POST['form_name'];
    $form_change = $_POST['form_change'];
    $form_data_name = $_FILES['form_data']['name'];
    $form_data_type = $_FILES['form_data']['type'];
    $form_data = $_FILES['form_data']['tmp_name'];
    
    $dsn = 'mysql:dbname=ecommerce;host=localhost';
    $pdo = new PDO($dsn,'root','');
    $data = addslashes(fread(fopen($form_data, "r"), filesize($form_data)));
    
    $result = $pdo->query("INSERT INTO my_img (description,img_bin,filename,img_type,name,change_name)
                  VALUES ('$form_description','$data','$form_data_name','$form_data_type','$form_name','$form_change')");
    if ($result) {
        echo "<script> alert('上傳成功');
                location.href='index.php';
              </script>";
        
    } else {
        echo "請求失敗,請重試";
        }
}
?>
