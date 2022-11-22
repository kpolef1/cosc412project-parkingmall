<?php
  session_start();
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body style = background-color:#ADD8E6>
    <h1>Welcome to ParkSpot!</h1>
    <h3>Register:</h3>
    <form action="register.php" method="post" id="form1" onsubmit="return passwordVerify() && usernameVerify()">

      <fieldset>
        <!--Username input-->
        <label for="username1">Username:</label>
        <input type="text" id="username1" name="username1" required><br>
        <br>

        <!--Email input-->
        <label for="email1">Email Address:</label>
        <input type="text" id="email1" name="email1" required><br>
        <br>

        <!--Password input-->
        <label for="password1">Password:</label>
        <input type="password" id="password1" name="password1"  required><br>
        <br>

        <!--Verify password input-->
        <label for="verify-pw1">Verify Password:</label>
        <input type="password" id="verifyPassword1" name="verifyPassword1"  required ><br>
        <br>

        <!--Submit fieldset-->
        <button type="submit" id ="submit1" form="form1" name="save" value="Submit">Submit</button>
      </fieldset>
    </form>

    <?php
      //initializes variables used for connecting to database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database_name = "db_contact";
      
      //starts the connection
      $conn=mysqli_connect($servername, $username, $password, $database_name);
      if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
      }
      
      if(isset($_POST['save'])){
        //gets the email, username, and password the user typed in
        $email = $_POST['email1'];
        $username = $_POST['username1'];
        $password = $_POST['password1'];
        $_SESSION['username'] = $username;

        //inserts that info into the database      
        $sql_query = "INSERT INTO tbl_accounts (email, username, password, spot_number) values('$email', '$username', '$password', NULL)";
        
        //if done successfullly, it redirects them to the homepage
        if(mysqli_query($conn, $sql_query)){
          header('Location: homepage.php');
        }
        else{
          echo "Error: " . $sql . "" . mysqli_error($conn);
        }
      
        //closes connection to the database
        mysqli_close($conn);
      }
    ?>

  </body>

  <script type="text/javascript">

    /*Function to verify that password and password verification inputs match*/
    function passwordVerify(){
        var pswd = document.getElementById("password1").value;
        var confirmPswd = document.getElementById("verifyPassword1").value;

        if(pswd!= confirmPswd){
            alert("Password do not match; Please verify and try again.");
            return false;
        }
        return true;
    }

    /*Function to verify that username length is appropriate (between 6 and 24 characters)*/
    function usernameVerify(){
        var username = document.getElementById("username1").value;

        if(username.length < 6){
            alert("Username must be at least 6 characters long");
            return false;
        }
        else if(username.length > 24){
            alert("Username must be less than 24 characters long");
            return false;
        }
        return true;
    }

</script>
</html>