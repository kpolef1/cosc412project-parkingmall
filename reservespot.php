<?php
  session_start();
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <title>Reserve Spot</title>
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
  </head>

  <body>
    <div class="header">
      <p style="color:black">Choose if you would rather manually reserve a spot or if you would like to get a recommended spot</p>
    </div>

    <input type=button onClick="parent.location='manualReserve.php'"value='Manually Reserve A Spot'>
    <input type=button onClick="parent.location='recommendedSpot.html'" value='Get A Recommended Spot'>
    <input type=button onClick="parent.location='homepage.php'" value='Go Back'>

  </body>

</html>