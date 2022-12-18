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

<form   class ="box-2" method="post" action="del.php"> 
<div class="project1-group">
 <h4>Please Enter your Username</h4><br>
Username: <input type="text" name="uname"><br><br></div> 
<div style="padding-left:90px;">
<input type="submit" value ="Submit" name="delete"></div>
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

if(isset($_POST['delete']))
         {
          // echo "<script>alert('Working')</script>";
             $UserID = $_POST['uname'];
             $query = " delete from login where name = '$UserID'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
                 header("location:main_page.php");
             }
             else
             {
                 echo ' Please Check Your Query ';
             }
        }
       
         ?>

    </body>
    </html>