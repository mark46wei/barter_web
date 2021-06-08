<?php 
   try {
        $pdo=new PDO("mysql:host=localhost;dbname=ecommerce","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $statement=$pdo->prepare("select * from my_img");
        $statement->execute();
        list($id,$img)=$statement->fetch(PDO::FETCH_NUM);
        header("Content-Type:image/png");
        echo $img;

         } catch (PDOException $e) {
             echo "failed to open the picture";
             echo $e->getMessage();
         } 
?>