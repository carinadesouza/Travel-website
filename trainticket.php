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
<body>  <div class ="box-2">
    <h1><p style="color:white">Whatatrip Railways - Ticket</h1></p>
    
	<div class="container">
		<table id="tabtk" width="600" >
			<thead>
           
				<tr>
					<th>Train Ticket Number</th>
					<th>Seat Number</th>
                    <th>Class</th>
					<th>Platform Number</th>
					<th>Passenger Name</th>
					<th>Mobile Number</th>
					<th>Email ID</th>
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
					$ticketno=$_POST['ticketno']; //get ticket number then display ticket
					$pass=$_POST['passID']; //get passenger ID then display ticket
        
					if(isset($_POST['Submit'])){
						
						$sql="SELECT * from trainticket where TickNo='".$ticketno."'";
						if(mysqli_query($conn,$sql))
						{
							$print=mysqli_query($conn,$sql);

							while($row = mysqli_fetch_assoc($print))
							{
								echo "<tr>";
								echo "<td>".$row['TickNo']."</td>";
								echo "<td>".$row['SeatNumber']."</td>";
                                echo "<td>".$row['Class']."</td>";
                                echo "<td>".$row['PlatformNo']."</td>";
								$sqlpass="SELECT Name, MobileNo,EmailID from passenger where PassengerID='".$pass."'";
								if(mysqli_query($conn,$sqlpass))
								{
									$p=mysqli_query($conn,$sqlpass);
									while($r=mysqli_fetch_assoc($p))
									{
										echo "<td>".$r['Name']."</td>";
										echo "<td>".$r['MobileNo']."</td>";
										echo "<td>".$r['EmailID']."</td>";	
									}
								}
								else
								{
									echo "Something went wrong";
								}
							}
							
						}
						else
						{
							echo "Something Went Wrong";
						}
					} 
					echo " <h3><p style='color:white;'>Passenger Details</p></h3>";
							echo "<a href='entertrainno.php' style='color:white;'>View</a>";
				?>
			</tbody>
		</table>
	</div>
				</div>
</body>
</html>