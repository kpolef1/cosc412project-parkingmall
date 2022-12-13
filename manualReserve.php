<?php
  session_start();
?>

<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name ="viewport" content = "width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
    <title>Reserve Spot - Park Spot</title>
  </head>
  <body style = background-color:#ADD8E6>
    <div class="header">
      <p style="color:black">Please select an available spot. Spots that have an X are already reserved</p>
    </div>

    <br>
      <img src="https://www.jordanwellspavingva.com/uploads/1/0/5/6/105679201/parking-lot-disign-small-jordan-wells-paving-richmond-va_orig.png" alt="parkinglot" width="600" height="600">
    <br>

    <form action="manualReserve.php" method="post">
      <input type="submit" name="spot1" id=spot1 value="1" />
      <input type="submit" name="spot1" id=spot1 value="2" />
      <input type="submit" name="spot1" id=spot1 value="3" />
      <input type="submit" name="spot1" id=spot1 value="4" />
      <input type="submit" name="spot1" id=spot1 value="5" />
      <input type="submit" name="spot1" id=spot1 value="6" />
      <input type="submit" name="spot1" id=spot1 value="7" />
      <input type="submit" name="spot1" id=spot1 value="8" />
      <input type="submit" name="spot1" id=spot1 value="9" />
      <input type="submit" name="spot1" id=spot1 value="10" />
      <input type="submit" name="spot1" id=spot1 value="11" />
      <input type="submit" name="spot1" id=spot1 value="12" />
      <input type="submit" name="spot1" id=spot1 value="13" />
      <input type="submit" name="spot1" id=spot1 value="14" />
      <input type="submit" name="spot1" id=spot1 value="15" />
    </form>
    <input type=button onClick="parent.location='reservespot.php'"value='Go Back'>

  <?php
    //initializes variables used for connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "db_contact";    

    //connects to database
    $conn=mysqli_connect($servername, $username, $password, $database_name);
    if(!$conn){
      die("Connection failed: " . mysqli_connect_error());
    }

    if($_SESSION['username']){

      //displays handicap sign for the handicap signs
      echo "<img class='spot2Handicap' src='https://w7.pngwing.com/pngs/603/642/png-transparent-wheelchair-disability-disabled-parking-permit-symbol-wheelchair.png' width = 25 height = 25 />";
      echo "<img class='spot3Handicap' src='https://w7.pngwing.com/pngs/603/642/png-transparent-wheelchair-disability-disabled-parking-permit-symbol-wheelchair.png' width = 25 height = 25 />";
      echo "<img class='spot7Handicap' src='https://w7.pngwing.com/pngs/603/642/png-transparent-wheelchair-disability-disabled-parking-permit-symbol-wheelchair.png' width = 25 height = 25 />";
      echo "<img class='spot8Handicap' src='https://w7.pngwing.com/pngs/603/642/png-transparent-wheelchair-disability-disabled-parking-permit-symbol-wheelchair.png' width = 25 height = 25 />";
      echo "<img class='spot11Handicap' src='https://w7.pngwing.com/pngs/603/642/png-transparent-wheelchair-disability-disabled-parking-permit-symbol-wheelchair.png' width = 25 height = 25 />";
      echo "<img class='spot14Handicap' src='https://w7.pngwing.com/pngs/603/642/png-transparent-wheelchair-disability-disabled-parking-permit-symbol-wheelchair.png' width = 25 height = 25 />";

      //the following code queries the database to see if a spot is reserved, if it is, the X is put on the spot
      //query for spot 1
      $query = "select * from tbl_accounts where spot_number = 1";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the x is drawn
      if($count > 0){
        echo "<img class='image1Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image1NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 style.opacity=0 />";
      }

      //query for spot 2
      $query = "select * from tbl_accounts where spot_number = 2";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the handicap sign is drawn is drawn
      if($count > 0){
        echo "<img class='image2Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image2NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }

      //query for spot 3
      $query = "select * from tbl_accounts where spot_number = 3";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the x is drawn
      if($count > 0){
        echo "<img class='image3Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image3NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }

      //query for spot 4
      $query = "select * from tbl_accounts where spot_number = 4";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the x is drawn
      if($count > 0){
        echo "<img class='image4Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image4NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 style.opacity=0 />";
      }

      //query for spot 5
      $query = "select * from tbl_accounts where spot_number = 5";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the x is drawn
      if($count > 0){
        echo "<img class='image5Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image5NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 style.opacity=0 />";
      }

      //query for spot 6
      $query = "select * from tbl_accounts where spot_number = 6";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the x is drawn
      if($count > 0){
        echo "<img class='image6Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image6NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 style.opacity=0 />";
      }

      //query for spot 7
      $query = "select * from tbl_accounts where spot_number = 7";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the handicap sign is drawn is drawn
      if($count > 0){
        echo "<img class='image7Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image7NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }

      //query for spot 8
      $query = "select * from tbl_accounts where spot_number = 8";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the handicap sign is drawn is drawn
      if($count > 0){
        echo "<img class='image8Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image8NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }

      //query for spot 9
      $query = "select * from tbl_accounts where spot_number = 9";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the x is drawn
      if($count > 0){
        echo "<img class='image9Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image9NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 style.opacity=0 />";
      }

      //query for spot 10
      $query = "select * from tbl_accounts where spot_number = 10";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the x is drawn
      if($count > 0){
        echo "<img class='image10Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image10NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 style.opacity=0 />";
      }

      //query for spot 11
      $query = "select * from tbl_accounts where spot_number = 11";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the handicap sign is drawn is drawn
      if($count > 0){
        echo "<img class='image11Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image11NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }

      //query for spot 12
      $query = "select * from tbl_accounts where spot_number = 12";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the x is drawn
      if($count > 0){
        echo "<img class='image12Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image12NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 style.opacity=0 />";
      }

      //query for spot 13
      $query = "select * from tbl_accounts where spot_number = 13";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the x is drawn
      if($count > 0){
        echo "<img class='image13Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image13NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 style.opacity=0 />";
      }

      //query for spot 14
      $query = "select * from tbl_accounts where spot_number = 14";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the handicap sign is drawn is drawn
      if($count > 0){
        echo "<img class='image14Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image14NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }

      //query for spot 15
      $query = "select * from tbl_accounts where spot_number = 15";
      $result = mysqli_query($conn, $query);
      $count = mysqli_num_rows($result);
      //if count is greater than 1, this means spot is reserved, so the x is drawn
      if($count > 0){
        echo "<img class='image15Reserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 />";
      }
      else{
        echo "<img class='image15NotReserved' src='https://banner2.cleanpng.com/20180714/kl/kisspng-computer-icons-symbol-x-5b49c174ba0a48.438958991531560308762.jpg' width = 25 height = 25 style.opacity=0 />";
      }

      if(isset($_POST['spot1'])){
        //gets username from the user that's logged in and the spot number they chose
        $username = $_SESSION['username'];
        $spot_number = $_POST['spot1'];
  
        //queries the database so see if that spot number exists in the database
        $sql_query = "select * from tbl_accounts where spot_number = '$spot_number'";
        $result = mysqli_query($conn, $sql_query);
        
        //gets the number of tuples returned by the query
        $count = mysqli_num_rows($result);
  
        //if count > 0, this means that that spot number is already reserved
        if($count > 0){
          echo '<script language="javascript">';
          echo 'alert("Sorry, that spot has been reserved");';
          echo 'window.location = "manualReserve.php"';
          echo '</script>';
          echo "spot has already been reserved";
          mysqli_close($conn);
        }
        //this means that spot number has not been reserved and the user can reserve it
        else{
          $query = "update tbl_accounts set spot_number ='$spot_number' where username = '$username'";
          mysqli_query($conn, $query);
          echo '<script language="javascript">';
          echo 'alert("Your spot has been reserved");';
          echo 'window.location = "manualReserve.php"';
          echo '</script>';
          echo "it worked";
          mysqli_close($conn);
        }
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

<style>
  .image1Reserved {
  position: relative;
  top: -550px;
  left:-190px;
}

.image1NotReserved {
  position: relative;
  opacity: 0;
  top: -550px;
  left:-190px;
}

.spot2Handicap{
  position: relative;
  top: -520px;
  left: 25px;
}

.image2Reserved {
  position: relative;
  top: -550px;
  left:-150px;
}

.image2NotReserved {
  position: relative;
  opacity: 0;
  top: -550px;
  left:-150px;
}

.spot3Handicap{
  position: relative;
  top:-520px;
  left:67px;
}

.image3Reserved {
  position: relative;
  top: -550px;
  left:-108px;
}

.image3NotReserved {
  position: relative;
  opacity: 0;
  top: -550px;
  left:-108px;
}

.image4Reserved {
  position: relative;
  top: -550px;
  left:-68px;
}

.image4NotReserved {
  position: relative;
  opacity: 0;
  top: -550px;
  left:-68px;
}

.image5Reserved {
  position: relative;
  top: -550px;
  left:-26px;
}

.image5NotReserved {
  position: relative;
  opacity: 0;
  top: -550px;
  left:-26px;
}

.image6Reserved {
  position: relative;
  top: -550px;
  left:16px;
}

.image6NotReserved {
  position: relative;
  opacity: 0;
  top: -550px;
  left:16px;
}

.spot7Handicap{
  position: relative;
  top: -520px;
  left: 306px;
}

.image7Reserved {
  position: relative;
  top: -550px;
  left:56px;
}

.image7NotReserved {
  position: relative;
  opacity: 0;
  top: -550px;
  left:56px;
}

.spot8Handicap{
  position: relative;
  top: -520px;
  left: 346px;
}

.image8Reserved {
  position: relative;
  top: -550px;
  left:96px;
}

.image8NotReserved {
  position: relative;
  opacity: 0;
  top: -550px;
  left:96px;
}

.image9Reserved {
  position: relative;
  top: -550px;
  left:136px;
}

.image9NotReserved {
  position: relative;
  opacity: 0;
  top: -550px;
  left:136px;
}

.image10Reserved {
  position: relative;
  top: -282px;
  left:80px;
}

.image10NotReserved {
  position: relative;
  opacity: 0;
  top: -282px;
  left:80px;
}

.spot11Handicap{
  position: relative;
  top: -192px;
  left: 315px;
}

.image11Reserved {
  position: relative;
  top: -192px;
  left:55px;
}

.image11NotReserved {
  position: relative;
  opacity: 0;
  top: -192px;
  left:55px;
}

.image12Reserved {
  position: relative;
  top: -102px;
  left:30px;
}

.image12NotReserved {
  position: relative;
  opacity: 0;
  top: -102px;
  left:30px;
}

.image13Reserved {
  position: relative;
  top: -102px;
  left:-457px;
}

.image13NotReserved {
  position: relative;
  opacity: 0;
  top: -102px;
  left:-457px;
}

.spot14Handicap{
  position: relative;
  top: -190px;
  left: -90px;
}

.image14Reserved {
  position: relative;
  top: -190px;
  left:-480px;
}

.image14NotReserved {
  position: relative;
  opacity: 0;
  top: -190px;
  left:-480px;
}

.image15Reserved {
  position: relative;
  top: -280px;
  left:-505px;
}

.image15NotReserved {
  position: relative;
  opacity: 0;
  top: -280px;
  left:-505px;
}

</style>