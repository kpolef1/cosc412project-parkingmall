<?php
  session_start();
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
    <h1> Welcome to ParkSpot </h1>
    <h3> Choose an option </h3>
   
  </head>
  <body>
    <input type=button onClick="parent.location='reservespot.php'"value='Reserve A Spot'>
    <input type=button onClick="parent.location='viewspots.php'" value='View Available Spots'>
    <input type=button onClick="parent.location='manageaccount.php'" value='Manage Account'>
    
    <form action="homepage.php" method="post">
      <input type="submit" name="logout" id=logout value="logout" />
    </form>

    <?php
      if(isset($_POST['logout'])){
        if(isset($_SESSION['username'])){
          session_destroy();
          echo '<script language="javascript">';
          echo 'alert("You have been successfully logged out");';
          echo 'window.location = "landingpage.html"';
          echo '</script>';
        }
        else{
          echo '<script language="javascript">';
          echo 'alert("You are not currently logged in");';
          echo 'window.location = "landingpage.html"';
          echo '</script>';
        }
      }
    ?>

  </body>
</html>