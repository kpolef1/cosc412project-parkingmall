<?php
  session_start();
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Sign In - ParkSpot</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body style = background-color:#ADD8E6>
  <h3>Log in:</h3>
    <form action="signIn.php" method="post" id="form2">
      <fieldset>
        <!--Username input-->
        <label for="username2">Username:</label>
        <input type="text" id="username2" name="username2" required><br>
        <br>
        <!--Password input-->
        <label for="password2">Password:</label>
        <input type="password" id="password2" name="password2"  required><br>
        <br>
        <!--Submit fieldset-->
        <button type="submit" id ="submit2" form="form2" name="save1" value="Submit">Submit</button>
      </fieldset>
      <input type=button onClick="javascript:history.go(-1)" value='Go Back'>
    </form>

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
          $_SESSION['username'] = $username;
          header('Location: homepage.php');
        }
        else{
          //echo "username and password not found";
          echo '<script language="javascript">';
          echo 'alert("login in failed, check user name or password");';
          echo 'window.location = "signIn.php"';
          echo '</script>';
        }
      
        mysqli_close($conn);
      }
    ?>

  </body>
</html>