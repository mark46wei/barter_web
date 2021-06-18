<?php 
	include_once "includes/common.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$dsn = 'mysql:dbname=ecommerce;host=localhost';
// create connect 
$conn = new PDO($dsn, $username, $password);
// Check connection

$result =$conn->query('select * from chat');
		
	switch ($_GET["method"]) {
		case "del":
			del();
			break;
		default:
			break;
	}

	function del(){
		$id = $_GET["id"];
		$sql = "DELETE FROM chat WHERE chatID = $id";
		global $con;
		$result = mysqli_query($con , $sql) or die('MySQL query error');
		echo "<script type='text/javascript'>";
		echo "alert('刪除留言成功');";
		echo "location.href='chat_management.php';";
		echo "</script>";
	}

?>