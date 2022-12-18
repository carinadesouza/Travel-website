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
  <title>flight booking</title>

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
	  	<form id="fsty"  method="POST" class="box-2" class="form-group1" > 
      <div>
                <h2> flight Registration </h2>
            </div>  
            <br><br>
            <div class="project1-group">
              <div class="form1">
	  		<label>Name: </label>
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
            </div>  <br> 
            <div class="project1-group">
              <div class="form1">
            <label for="class">Class: </label>
            <select name="type">
            	<option value="Economy">Economy</option>
            	<option value="Business">Business</option>
				<option value="Firstclass">First Class</option>
           
      </select>
      </div>
            </div>  
      <br> 
            <div class="project1-group">
              <div class="form1">
            <label for="flightNo">Flight Number: </label>
            <input class="number" type="text" name="flino" id="fno"><br>
            <input type="submit" name="submit" value="Submit">
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
        $ticknoo=rand(3500,4000);
				$passid=rand(1,50);
				$namee=$_POST['name'];
				$namee=mysqli_real_escape_string($conn,$namee);
				$genderr=$_POST['gender'];
				$genderr=mysqli_real_escape_string($conn,$genderr);
				$dobb=$_POST['dob'];
				$dobb=mysqli_real_escape_string($conn,$dobb);
				$mobnoo=$_POST['mobno'];
				$mobnoo=mysqli_real_escape_string($conn,$mobnoo);
				$emaill=$_POST['email'];
				$emaill=mysqli_real_escape_string($conn,$emaill);
				$typee=$_POST['type'];
				$typee=mysqli_real_escape_string($conn,$typee);
        $flinoo=$_POST['flino'];
				$flinoo=mysqli_real_escape_string($conn,$flinoo);
        
	  
				if(isset($_POST['submit']))
				{
					$sql="INSERT into passenger (PassengerID,Name,Gender,DOB,MobileNo,EmailID) values('".$passid."','".$namee."','".$genderr."','".$dobb."','".$mobnoo."','".$emaill."')";
					$sqltick="INSERT into ticket (TickNo,FlightNo,Class,TerminalID) values ('".$ticknoo."','".$flinoo."','".$typee."','".rand(1,7)."')";
					if(mysqli_query($conn,$sql)){
            if(mysqli_query($conn,$sqltick))
						{ ?>
              <div class="box-2">
              <?php echo "<h1 style='color:rgb(68,24,0);'>Your Ticket Has Been Booked !!</h1>";
              echo "<br><h4 style=color:rgb(68,24,0);'>Passenger ID = ".$passid."</h4>";
              echo "<br><h4 style='color:rgb(68,24,0);'>Ticket Number =" .$ticknoo."</h4>";
              echo "<br><h4 style='color:rgb(68,24,0);'>Click View to see Passenger and Flight Details</h4>";
              echo "<h4><a href='entertickno.php' style='color:rgb(68,24,0);'>View</h4></a>";?> </div><?php
						
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


