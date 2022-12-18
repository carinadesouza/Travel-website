<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="registration.css">
  <title>Railway booking</title>

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

	  <div class="container">
	  	<form id="fsty" class="box-2" method="POST"> 
          <div>
                <h2> Railway Registration </h2>
            </div>  
            <br><br>
            <div class="project1-group">
              <div class="form1">
	  		<label for="name">Name: </label>
            <input type="text" name="name" placeholder="Name" id="name">
           </div> 
        </div> 
            <br>
             <div class="project1-group">
              <div class="form1"> 
              <label>Gender: </label>
              <input type="radio" id="male" name="gender" value="male">Male
              <input type="radio" id="female" name="gender" value="female">Female
              <input type="radio" id="others" name="gender" value="others"> Others
            </div>
            </div> 
             <br> 
            <div class="project1-group">
              <div class="form1">  
            <label for="DOB">DOB: </label>
            <input type="date" name="dob" id="DOB">
           </div>
            </div>
            <br> 
             <div class="project1-group">
              <div class="form1">
            <label for="mobno">Mobile No: </label>
            <input type="telno" name="mobno" id="mobno">
            </div>
            </div>  
            <br> 
             <div class="project1-group">
              <div class="form1">
            <label for="email">Email: </label>
            <input type="email" name="email" id="eml">
           
              </div>
            </div> <br>
             <div class="project1-group">
              <div class="form1">
                 <label for="class">Class: </label>
            <select name="class">
            <option value=" AC First class">AC First Class</option>
      <option value="AC 2Tier">AC 2Tier</option>
      <option value="AC 3Tier">AC 3Tier</option>
      <option value="Executive Chair Car">Executive Chair Car</option>
            </select>
            
              </div>
            </div> <br>
          <div class="project1-group">
              <div class="form1">
            <label>Train Number: </label>
            <input type="text" name="Tno"><br>
            <input type="submit" name="Submit">
	    </div>
            </div>  
          </form>
	  </div>
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
        $tickno=rand(1000000,9999999);
				$passid=rand(1,100);
        $seatno=rand(1,50);
				$name=$_POST['name'];
				$name=mysqli_real_escape_string($conn,$name);
				$gender=$_POST['gender'];
				$gender=mysqli_real_escape_string($conn,$gender);
				$dob=$_POST['dob'];
				$dob=mysqli_real_escape_string($conn,$dob);
				$mobno=$_POST['mobno'];
				$mobno=mysqli_real_escape_string($conn,$mobno);
				$email=$_POST['email'];
				$email=mysqli_real_escape_string($conn,$email);
				$class=$_POST['class'];
				$class=mysqli_real_escape_string($conn,$class);
				if(isset($_POST['Submit']))
				{
					$sql="INSERT into passenger (PassengerID,Name,Gender,DOB,MobileNo,EmailID) values('".$passid."','".$name."','".$gender."','".$dob."','".$mobno."','".$email."')";
					$sqltick="INSERT into trainticket (TickNo,SeatNumber,Class,PlatformNo) values ('".$tickno."','".$seatno."','".$class."','".rand(1,7)."')";
					if(mysqli_query($conn,$sql)){
						if(mysqli_query($conn,$sqltick))
						{ ?>
              <div class="box-2">
              <?php echo "<h1 style='color:rgb(68,24,0);'><i>Your Ticket Has Been Booked !!</h1>";
							echo "<br><h4 style='color:rgb(68,24,0);'><i>Passenger ID = ".$passid."</h4>";
							echo "<br><h4 style='color:rgb(68,24,0);'><i>Ticket Number = ".$tickno."</h4>";
							echo "<br><h4 style='color:rgb(68,24,0);'><i>Click View to see Passenger and Train Booking Details</h4>";
							echo "<h4><a href='traintickno.php' style='color:rgb(68,24,0);'>View</h4></a>";?> </div><?php
						}
						
						else
						{
							echo "Something Went Wrong";
						}
        }
					else
					{
						echo "Something Went Wrong";
					}
        }
        
				
				?>

</body>
</html>