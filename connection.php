<?php
	$connection = mysqli_connect('localhost', 'root', '');
	#Check connection
	if(!$connection){
		die("connection failed: " . mysqli_connect_error()) ;
	}
	echo "Connected successfully<br>";

	#Create database
	$database = "CREATE DATABASE IF NOT EXISTS account";
	if (mysqli_query($connection, $database)) {
		# code...
		echo "Database created successfully<br>";
	}
	else {
		echo "Error creating database" . mysqli_error($connection);
	}

	#Create table
	$table = "CREATE TABLE IF NOT EXISTS accountdetails (
	id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	 name VARCHAR (30) NOT NULL,
	 email VARCHAR (50) NOT NULL,
	 username VARCHAR (20) NOT NULL)";

	mysqli_select_db($connection,"account");
	 if(mysqli_query($connection, $table)){
	 	echo "Table created succesfully";
	 }
	 else {
	 	echo "Error creating table" . mysqli_error($connection);
	 }

	 #Insert into database
	 $result = mysqli_query($connection, "SELECT * FROM accountdetails");
	 if(!$result){
	 	die("Database result failed: " . mysqli_error($connection));
	 }

	 $name = $_POST["name"];
	 $email = $_POST["email"];
	 $username = $_POST["username"];
	 $insert = "INSERT INTO accountdetails (name,email,username)
	 			VALUES('".$name."','".$email."','".$username."')";
	 if(mysqli_query($connection, $insert)) {
	 	echo "<h2>"."Congratulations, Your Account has been Successfully added."."</h2>";
	 }
	 else {
	echo "Error".mysql1_error($connection);
	}

	mysqli_close($connection);

?>
<div>
  <form action="demo.php" method="post" enctype="multipart/form-data">
    <input type="submit" value="Back" />
  </form>
</table>
</div>