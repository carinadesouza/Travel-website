<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "whatatrip";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

    if(isset($_POST['submit']))
    {
        if(empty($_POST['userlogin']) || empty($_POST['email']) || empty($_POST['password']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            $UserName = $_POST['userlogin'];
            $UserEmail = $_POST['email'];
            $UserAge = $_POST['password'];

            $query = " insert into login (name,email,password) values('$UserName','$UserEmail','$UserAge')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("Location: http://localhost/miniproject/main_page.php");
            }
            else
            {
                header("location:http://localhost/miniproject/index.php");  
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>