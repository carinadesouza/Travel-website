<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="web_desgin.css?v=<?php echo time(); ?>">
  <title>Cab booking</title>
</head>
<body>
<header>
    <div>
    
      <div class="navbar"> 
        <h1 >What A Trip</h1> 
        <div class="dropdown">
          <button class="dropbtn">More 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="signUp.php"target="_blank">Add Account</a>
            <a href="index.php" target="_blank">Sign In</a> 
            <form  class="del" action="http://localhost/miniproject/del.php"> 
            <input  class="del" type="submit" value ="Delete Account" name="delete"></form>
            <form    action="http://localhost/miniproject/chpaswd.php">
            <input class="update" type="submit" value ="Update Account" name="update"></form>
             
    
          </div>
          <div class="line"></div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Contact 
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#">8669510685</a>
            <a href="#">9579276942</a>
          </div> 
          <div class="line"></div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">About
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="about.php">Our Team</a>
          </div> 
          <div class="line"></div>
        </div>
        <div class="nav">
          <a href="main_page.php" target="_blank">Home <div class="line"></div></a>
        </div> 
       
      </div>
    
    </div> 
  </header>
  <form class="box-2" method="post">
    <h1>Cab booking</h1>
    <br>
    <div class="project1-group">
      <label>PickUp From:</label>
      <input class="cabsDesgin" type="text" name="pickup">
      <br><br>
      <label>Drop To:</label>
      <input class="cabsDesgin" type="text" name="drop">
      <br> 
      <div style="padding-left:90px;">
      <input class="button" type="submit" name="Submit" value="Submit"></div>
    </form>
    </div>
    <br> 
    
  </form> 
 

<?php error_reporting(0);?>
<?php
			
            $dbhost="localhost";
            $dbuser="root";
            $dbpass="";
            $db="whatatrip";
            $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
            if(!$conn)
            {
                echo "Connection was failed".mysqli_connect_error();
            }
    
            $refcode=rand(3500,4000);
            $pick=$_POST['pickup'];
            $pick=mysqli_real_escape_string($conn,$pick);
            $Drop=$_POST['drop'];
            $Drop=mysqli_real_escape_string($conn,$Drop);
            
  
            if(isset($_POST['Submit']))
            {
                $sql="INSERT into cabticket (RouteID,ReferralCode,PickUpPlace,DropPlace) values ('".rand(10,50)."','".$refcode."','".$pick."','".$Drop."')";
                if(mysqli_query($conn,$sql)){ ?>
                <div class="box-2">
                       <?php echo "<h1 style='color:rgb(68,24,0);'>Your Ticket Has Been Booked !!</h1>";
                        echo "<br><h4 style='color:rgb(68,24,0);'>Referral Code ID = ".$refcode."</h4>";
                        echo "<br><h4 style='color:rgb(68,24,0);'>Date of Travel = ".date("Y/m/d")."</h4>";
                        echo "<br><h4 style='color:rgb(68,24,0);'>Click View to see Booking Details</h4>";
                        echo "<h4><a href='enterdriverid.php' style='color:rgb(68,24,0); text-decoration :none;'>View</h4></a>";?> </div><?php
                    }
                    
                    else
                    {
                        echo "Something Went Wrong";
                    }
    }
               
            
            ?>


    
</body>
</html>