<?php
	$connection = mysqli_connect('localhost', 'root', '', 'account');
	#Check connection
	if(!$connection){
		die("connection failed: " . mysqli_connect_error()) ;
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Account Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
	<?php
		$display = "SELECT * FROM accountdetails";
		$result = mysqli_query($connection, $display);
		if (mysqli_num_rows($result) > 0) {
			# code...
			while($row = mysqli_fetch_assoc($result)){
				echo "Name: " . $row["name"]. "<br>".
					"Email Address: " . $row["email"]. "<br>".
					"Username: " . $row["username"]. "<br><br>";
			}
		} else {
			echo "0 result";
		}
	?>
	</div>

</body>
</html>