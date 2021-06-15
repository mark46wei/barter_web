<?php 
   try {
        $pdo=new PDO("mysql:host=localhost;dbname=ecommerce","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $id = isset($_GET['id'])? intval($_GET['id']) : 0;
        $statement=$pdo->query("select * from my_img where id = $id");
        $statement->execute();

                                                                 
        list($id,$img)=$statement->fetch(PDO::FETCH_NUM);
        header("Content-Type:image/png");
        echo $img;
         } catch (PDOException $e) {
             echo "failed to open the picture";
             echo $e->getMessage();
         }
?>