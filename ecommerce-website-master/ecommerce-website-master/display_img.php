<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("ecommerce") or die(mysql_error());
$image = mysql_query("select * from my_img where id=0") or die("CantPerformQuery");;
$image = mysql_fetch_object($image);
header("Content-Type: image/jpeg");
echo $image->img_bin;
?>