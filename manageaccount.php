<?php
  session_start();
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Manage Account - ParkSpot</title>
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
    <h1>Here, you can unreserve your current spot if you have one or you can delete your account</h1>
  </head>
  <body>
    
    <form action="manageaccount.php" method="post">
      <input type="submit" name="unreserve" id=unreserve value="Unreserve Spot" />
      <input type="submit" name="deleteaccount" id=deleteaccount value="Delete Account" />
    </form>

    <input type=button onClick="parent.location='homepage.php'"value='Go Back'>

    <?php
      if($_SESSION['username']){
        if(isset($_POST['unreserve'])){
          //initializes variables used for connecting to database
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database_name = "db_contact";
      
          //connects to database
          $conn=mysqli_connect($servername, $username, $password, $database_name);

          //kills connection if cant connect
          if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
         }
          //gets username from the user thats logged in
          $username = $_SESSION['username'];
  
          //queries the database to update the spot_number to null for the user thats logged in
          $sql_query = "update tbl_accounts set spot_number = NULL where username = '$username'";
          mysqli_query($conn, $sql_query);
          mysqli_close($conn);
          echo '<script language="javascript">';
          echo 'alert("Your spot has been unreserved");';
          echo 'window.location = "homepage.php"';
          echo '</script>';
        }
        else if(isset($_POST['deleteaccount'])){
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database_name = "db_contact";
      
          //connects to database
          $conn=mysqli_connect($servername, $username, $password, $database_name);

          //kills connection if cant connect
          if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
          }

          //gets username from the user thats logged in
          $username = $_SESSION['username'];

          //queries the database to delete tuple with that username(deletes account from database)
          $sql_query = "delete from tbl_accounts where username = '$username'";
          mysqli_query($conn, $sql_query);
          mysqli_close($conn);
          echo '<script language="javascript">';
          echo 'alert("Your account has been deleted");';
          echo 'window.location = "landingpage.html"';
          echo '</script>';
        }
      }
      else{
        echo '<script language="javascript">';
        echo 'alert("You must be signed in to view this page");';
        echo 'window.location = "landingpage.html"';
        echo '</script>';
      }
    ?>

  </body>
</html>