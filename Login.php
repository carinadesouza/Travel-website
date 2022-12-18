<?php      
      $host = "localhost";  
	  $user = "root";  
	  $password = '';  
	  $db_name = "whatatrip";  
		
	  $con = mysqli_connect($host, $user, $password, $db_name);  
	  if(mysqli_connect_errno()) {  
		  die("Failed to connect with MySQL: ". mysqli_connect_error());  
	  }  
    $user = $_POST['userlogin'];  
    $password = $_POST['passwordlogin'];  
        $sql = "SELECT *from login where name = '$user' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){   
			echo ("Enter correct username and password");
            header("Location: http://localhost/miniproject/main_page.php");  
        }  
        else{   
		echo("Enter correct username and password"); 
          header("location:http://localhost/miniproject/index.php");  
        }     
?>  