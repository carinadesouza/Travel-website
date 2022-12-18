<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="flight_booking.css?v=<?php echo time(); ?>">
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
   <div class ="box-2">
  <h1><p style="color:white">Available Cabs</h1></p>
    
	<div class="container d-flex justify-content-end" >
		<table id="tabtk" width="600" >
			<thead>
				<tr>
					<th></th>
					<th>Cab Number</th>
                    <th>Vehicle Category</th>
					<th>Vehicle Model</th>
					<th>Driver</th>
                    <th>Driver ID</th>
					<th>Driver Contact</th>
                    <th>Booking</th>
				</tr>
                <tr>
					<th></th>
					<td>LH-AAG-5600</td>
                    <td>4 Seater</td>
					<td>Passat</td>
					<td>Billy Ben</td>
                    <td>56</td>
					<td>2267948621</td>
                    <td><form method='GET' action='GDC-CabBook.php'>
    									  <input class="style" type='submit' value='Book' >
										  </form></td>
				</tr>
                <tr>
					<th></th>
					<td>LH-TYK-3689</td>
                    <td>6 Seater</td>
					<td>Chevrolet</td>
					<td>George Den</td>
                    <td>12</td>
					<td>1845678321</td>
                    <td>	<form method='GET' action='GDC-CabBook.php'>
    								 <input class="style"  type='submit' value='Book' >
										  </form></td>
				</tr>
                <tr>
					<th></th>
					<td>LH-PAQ-6771</td>
                    <td>6 Seater</td>
					<td>Toyota</td>
					<td>Lapis Billard</td>
                    <td>89</td>
					<td>1746356109</td>
                    <td><form method='GET' action='GDC-CabBook.php'>
    									  <input class="style" type='submit' value='Book'>
										  </form></td>
				</tr>
                <tr>
					<th></th>
					<td>LH-DHH-0098</td>
                    <td>5 Seater</td>
					<td>Brezza</td>
					<td>Tony Williams</td>
                    <td>45</td>
					<td>2569083152</td>
                    <td><form method='GET' action='GDC-CabBook.php'>
    									  <input  class="style"type='submit' value='Book' >
										  </form></td>
				</tr>
                <tr>
					<th></th>
					<td>LH-HDY-7479</td>
                    <td>8 Seater</td>
					<td>Datsun</td>
					<td>Richard Lobo</td>
                    <td>31</td>
					<td>2489029831</td>
                    <td><form method='GET' action='GDC-CabBook.php'>
    									  <input  class="style"type='submit' value='Book' >
										  </form></td>
				</tr>
                <tr>
					<th></th>
					<td>LH-KJY-9275</td>
                    <td>5 Seater</td>
					<td>i10</td>
					<td>Joe Gluck</td>
                    <td>90</td>
					<td>2298745270</td>
                    <td><form method='GET' action='GDC-CabBook.php'>
    									  <input class="style" type='submit' value='Book' >
										  </form></td>
				</tr>
			</thead>
</table>
</div>
</div>
					
		</body>
    </html>	