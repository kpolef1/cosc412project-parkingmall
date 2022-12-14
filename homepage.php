<?php
  session_start();
?>

<!DOCTYPE html>
<html lang = "en">
<center>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Home Page - ParkSpot</title>
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
    <h1> Welcome to ParkSpot </h1>
    <h3> Choose an option </h3>
   
  </head>
  <body style="background-color:#ADD8E6">
    <input type=button onClick="parent.location='manualReserve.php'"value='Reserve A Spot'>
    <input type=button onClick="parent.location='viewspots.php'" value='View Available Spots'>
    <input type=button onClick="parent.location='manageaccount.php'" value='Manage Account'>
    
    <form action="homepage.php" method="post">
      <input type="submit" name="logout" id=logout value="Log Out" />
    </form>

    <?php
      if(isset($_SESSION['username'])){
        if(isset($_POST['logout'])){
          session_destroy();
          echo '<script language="javascript">';
          echo 'alert("You have been successfully logged out");';
          echo 'window.location = "landingpage.html"';
          echo '</script>';
        }
      }
      else{
        echo '<script language="javascript">';
        echo 'alert("You are not currently logged in");';
        echo 'window.location = "landingpage.html"';
        echo '</script>';
      }
    ?>

<script type='text/javascript'>
		(function(I, L, T, i, c, k, s) {if(I.iticks) return;I.iticks = {host:c, settings:s, clientId:k, cdn:L, queue:[]};var h = T.head || T.documentElement;var e = T.createElement(i);var l = I.location;e.async = true;e.src = (L||c)+'/client/inject-v2.min.js';h.insertBefore(e, h.firstChild);I.iticks.call = function(a, b) {I.iticks.queue.push([a, b]);};})(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', '9A8YpYXZJW5pDYEGa_c', {});
</script>

  </body>
</center>
</html>
