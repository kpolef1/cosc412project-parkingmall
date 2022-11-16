<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "db_contact";

$conn=mysqli_connect($servername, $username, $password, $database_name);
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save'])){
	$email = $_POST['email1'];
	$username = $_POST['username1'];
	$password = $_POST['password1'];

	$sql_query = "INSERT INTO tbl_accounts (email, username, password) values('$email', '$username', '$password')";

	if(mysqli_query($conn, $sql_query)){
		header('Location: homepage.html');
	}
	else{
		echo "Error: " . $sql . "" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>