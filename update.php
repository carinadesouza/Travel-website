<?php
if(isset($_POST['submit'])){
if(password_verify($currentPassword,$row['passwordlogin'])){
                   if($passwordConfirm ==''){
                   $error[] = 'Please confirm the password.';
                 }
                   if($newpassword != $passwordConfirm){
                    $error[] = 'Passwords do not match.';
                  }
                 if(strlen($newpassword)<5){ // min 
                    $error[] = 'The password is 6 characters long.';
                  }
           
                 if(strlen($newpassword)>20){ // Max 
                    $error[] = 'Password: Max length 20 Characters Not allowed';
                  }
                }
            }
               $query = " update login set password = '".$newpassword."''where name='".$user."'";
               $result = mysqli_query($con,$query);
                

            if($result)
        {
            header("location:main_page.php");
        }
        else
        {
            echo " Please Check Your Query ";
        }
    
    
    
    ?>