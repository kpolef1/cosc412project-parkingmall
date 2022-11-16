<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "db_contact";

$conn=mysqli_connect($servername, $username, $password, $database_name);
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save1'])){
	$username = $_POST['username2'];
	$password = $_POST['password2'];

	$sql_query = "select * from tbl_accounts where username ='$username' and password ='$password'";
  $result = mysqli_query($conn, $sql_query);
  $count = mysqli_num_rows($result);

  if($count > 0){
    // echo "Login succesfful";
    header('Location: homepage.html');
  }
  else{
    //echo "username and password not found";
		echo '<script language="javascript">';
    echo 'alert("login in failed, check user name or password");';
    echo 'window.location = "landingpage.html"';
    echo '</script>';
  }

	// if(mysqli_query($conn, $sql_query)){
	// 	header('Location: homepage.html');
	// }
	// else{
	// 	echo "Error: " . $sql . "" . mysqli_error($conn);
	// }

	mysqli_close($conn);
}
?>