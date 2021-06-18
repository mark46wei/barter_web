<?php
/*
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
        <a href="mes.php?method=del&id=<?php echo $row["id"]?>" class="btn btn-danger mybtn">刪除</a>
}

$conn = null ;*/
?>
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
?>
<!DOCTYPE html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<?php 
		    foreach($result as  $row){ 
		?>
			<div class="card">
					<a href="chatFunc.php?method=del&id=<?php echo $row["chatID"]?>" class="btn btn-danger mybtn">刪除</a>
				<div class="card-body">
					<h5 class="card-title">emali：<?php echo $row["email_id"];?></h5>
					<p class="card-text">
						<?php echo $row["chatText"];?>
					</p>
				</div>
			</div>		 
		<?php 
		   	}
		?>
	</div>
	     
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>