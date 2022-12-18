<!DOCTYPE html>
<html lang="en">
<head>
  <title>Travel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="web_desgin.css?v=<?php echo time(); ?>">    
  
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
        <form class="box-2" method="post" action="chpaswd.php"> 
        <div class="project1-group">
 <h4>Please Enter your Username</h4>
Username: <input type="text" name="uname"><br><br>
<h4>Please Enter Current Password</h4>
Current Password : <input type="text" name="curr"><br><br>
<h4>Please Enter your New Passowrd</h4>
New Passowrd: <input type="text" name="new"><br><br> 
<h4>Please Confirm Your New Password</h4>
Confirm Password : <input type="text" name="con"><br><br> </div> 
<div style="padding-left:90px;">
<input type="submit" value ="Submit" name="update"></div>
</form>
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

               if(isset($_POST['update'])){
                // echo "<script>alert('Working');</script>";
                $user=$_POST['uname'];
                $currentPassword=$_POST['curr']; 
                $newpassword=$_POST['new'];  
                $passwordConfirm=$_POST['con'];
                     
                               $query = " update login set password ='$newpassword' where name='$user'";
                            //    UPDATE login SET `password`='image' WHERE pas
                               $result = mysqli_query($conn,$query);
                                
                
                            if($result)
                        {
                            header("location:main_page.php");
                        }
                        else
                        {
                            echo " Please Check Your Query ";
                        }
            }
        
               ?>
               
            
             
</body>
</html>