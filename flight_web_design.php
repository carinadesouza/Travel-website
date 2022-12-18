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
  <form class="box-2"action="GDC-FlightHomeConn.php" method="post">
    <h1>Flight Booking</h1>
    <br>
    <div class="project1-group">
      <label>From:</label>
      <select name="origin" id="ori">
        <option value="origin">select option</option>
        <option value="Goa">Goa</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Bangalore">Bangalore</option>
      </select> 
      <span id="to-design">
      <label>To:</label>
      <select name="destination"id="dest">
        <option value="destination">select option</option>
        <option value="Goa">Goa</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Bangalore">Bangalore</option>
      </select>  
      </span>
    </div>
    <br> 
    <div class=" project1-group" >
    <label>Departure:</label>
    <input type="date" name="depart"id="depart"> 
    <span id="return-design">
    <label>Arrival: </label>
    <input type="date" name="returns" id="returns">
    </span> 
  </div>
    
    <br>
    <label>Class:</label>
    <select name="class"id="class">
      <option value="class">select option</option>
      <option value="first class">First Class</option>
      <option value="Economic">Economy</option>
      <option value="Business">Business</option>
    </select> 
   
    <span class="passager">Passenger:</span>  
    <input  type="number" id="adults" class="passagerdesign" min="1" max="50" value="0"  required>
   
    <br>
    <br>
    <br>
    <div class="form1" id="form1" style="padding-left:100px;">
      <input  class="button" type="submit" name="submit" id="flightsButton" value="submit">
    </div>
    
  </form> 
  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script> 
    
</body>
</html>