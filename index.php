<html>

<head>
    <title>Project </title>
    <link rel="stylesheet" type="text/css" href="login_signin.css"> 
   
</head>
<body>
    <div class="box-1"> 
        <div class="fglow">
        <h1>What A Trip </h1>
        <p> A journey of a thousand miles begins with a single step.
        </p>
    </div> 
</div>
    <div>
        <form id="form" action='login.php' method="POST" class="box-2" >
            <div>
                <h2>Sign In </h2>
            </div>
           
            <div class="project1-group">
                <label>Username:</label>
                <input type="text" name="userlogin" id="userlogin" placeholder="Enter your username" >
            </div>  
            <br>
            <div class="project1-group">
                <label>Password:</label>
                <input type="password" name="passwordlogin" id="passwordlogin" placeholder=" Enter your password" minlength="6" required>
            </div>
            <br>
            <div>
                <a href=".......">forgot password?</a>
            </div>
            <br>
            <div class="form1"> 
                <input class="button" type="submit" name="submit" onclick="return validate()" value="LOGIN ">
            </div>
            <br>
            <div>
                <a href="signUp.php"> Sign Up</a>
            </div>
        </form> 
        <script type="text/javascript">
function validate()
{
var fname = document.getElementById("userlogin");
if (fname.value == "" || (isNaN(fname.value)==false))
{
alert("Please enter your correct name");
return false;
}
var pass = document.getElementById("passwordlogin");
if (pass.value == "") {
//If the "Please Select" option is selected display error.
alert("Please enter your password");
return false;
} 
}</script>
    </div> 
    
</body>
</html> 