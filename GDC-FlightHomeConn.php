<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
    crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="flight_booking.css?v=<?php echo time(); ?>">
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
  <div class ="box-2">
  <div class="container">
		<h1 class="hsty" id="he1">Available Flights</h1>
		<table id="t1" width="700"  >
			<thead>
				<tr>
					<th>Flight Number</th>
					<th>Type</th>
					<th>Origin</th>
					<th>Destination</th>
					<th>Departure Time</th>
					<th>Arrival Time</th>
					<th>Departure</th>
					<th>Arrival</th>
					<th>Fare</th>
					<th>Book</th>
				</tr>
			</thead>
			<tbody> 
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
					
					$origin=$_POST['origin'];
					$classbyuser=$_POST['class'];
					$destination=$_POST['destination'];
					$dep=$_POST['depart'];
					$arr=$_POST['returns'];
					
					if(isset($_POST['submit'])){
						$sql="SELECT * from flight WHERE Origin='".$origin."' and Destination='".$destination."' and Departure='".$dep."' and Arrival='".$arr."'";

						$result = mysqli_query($conn,$sql);      
                                    while($row=mysqli_fetch_assoc($result))
                                    {
										
                                        $FlightNum = $row['FlightNo'];
                                        $Typee = $row['Type'];
                                        $Orig = $row['Origin'];
                                        $dest = $row['Destination'];
                                        $depart = $row['DepartureTime'];
                                        $arriv = $row['ArrivalTime'];
										$departur = $row['Departure'];
                                        $arrive = $row['Arrival'];
										$price = $row['Fare'];
										
										
									
				?>

                                <tr>
                                        <td><?php echo $FlightNum ?></td>
                                        <td><?php echo $Typee ?></td>
                                        <td><?php echo $Orig ?></td>
                                        <td><?php echo $dest ?></td>
                                        <td><?php echo $depart ?></td>
										<td><?php echo $arriv ?></td>
										<td><?php echo $departur ?></td>
										<td><?php echo $arrive ?></td>
										<td><?php echo $price ?></td>
										
										<td><form method='GET' action='GDC-Book.php'>
    									<input type='submit' value='Book' style='padding: 5px 10px'>
										</form></td>;
                                        
                                </tr> 
								<?php 
							          } 
									  
									}
					            ?>                            
					
											
				
			</tbody>
		</table> 
                </div>
                </body>
                </html>