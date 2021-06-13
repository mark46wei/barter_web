<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$dsn = 'mysql:dbname=ecommerce;host=localhost';
// create connect 
$conn = new PDO($dsn, $username, $password);
// Check connection

$result =$conn->query('select * from chat');

foreach($result as  $row){      
        echo    '<div>';
        echo        '<div class="chat">';
        echo            '<div class="container">';
        echo                '<table class="table">';
        echo                    '<tbody>';
        echo                        '<tr>';
        echo                            "<td width:25%>{$row["email_id"]}</td>";
        echo                            "<td width:75%>{$row["chatText"]}</td>";
        echo                        '</tr>';
        echo                    '</tbody>';
        echo                '</table>';
        echo            '</div>';
        echo        '</div>';
        echo    '</div>';
    
}
$conn = null ;
?>