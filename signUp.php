<html>

<head>
    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="login_signin.css">
    <script type="text/javascript" src="validate.js"></script>
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
        <form class="box-2" action="signUp1.php" method="post">
            <div>
                <h2>Create Account</h2>
            </div>
            <div class="project1-group">
                <label>Name </label>
                <input type="text" name="userlogin" id="userlogin" placeholder="Enter your Name" required>
            </div>
            <br>
            <div class="project1-group">
                <label>Email</label>
                <input type="email" name="email"  id="email" placeholder=" Enter your Email" required>
            </div>
             <br>
            <div class="project1-group">
                <label>Password</label>
                <input type="password" name="password" id="password" placeholder=" password" minlength="5" required>
            </div>
            <div class="project1-group2">
                <p><small>Make sure you entered the correct details.<span id="star">*</span></small></p>
            </div>
            <div class="project1-group2">
                <p><small><input type="checkbox" id="checkbox" required> By clicking you agree to our teams and conditions of data policy and cookies
                        policy</small></p>
            </div><br>
            <div class="form1">
                <input class="button" type="submit" name="submit" onclick="return validate()" value="SignUp">
            </div>
            <div>
                <a href="http://localhost/miniproject/index.php">Sign In</a>
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
var email = document.getElementById("email");
if (email.value == "") {
//If the "Please Select" option is selected display error.
alert("Please enter your email ");
return false;
}
atpos = email.value.indexOf("@");
dotpos = email.value.lastIndexOf(".");
if (atpos < 1 || ( dotpos - atpos < 2 ))
{
alert("Please enter correct email ID");
document.getElementById("email").focus() ;
return false;
}
var pass = document.getElementById("passwordlogin");
if (pass.value == "") {
//If the "Please Select" option is selected display error.
alert("Please enter your password");
return false;
} 
var b = 0, chk=document.getElementsByName("checkbox")
for(j=0;j<chk.length;j++) {
if(chk.item(j).checked == false) {
b++;
}
}
if(b == chk.length) {
alert("Please accept the terms and conditions");
return false;
} else {
document.getElementById("checkbox").style.border = "";
} 
}</script>
    </div>
</body>
</html> 