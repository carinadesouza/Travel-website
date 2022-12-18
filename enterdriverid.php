<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="web_desgin.css">
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
  <div class="box-2">
<form action="cabticket.php" method="post">
<h4>Please Enter Driver ID</h4>
Driver ID : <input type="text" name="DId"><br><br>
<h4>Please Enter your Referral Code</h4>
Referral Code : <input type="text" name="refcode"><br><br>  
<div class="boxs">
<input type="submit" name="Submit" value="Submit">  </div>
</div>
</form>
</body>
</html>
