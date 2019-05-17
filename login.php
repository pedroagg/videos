<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body bgcolor="#6E6E6E">
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
	<p align="center"><font size="7" face="Broadway">Video UEM</font></p>
	<p align="center"><h1>Log In</h1></p>
<form action="" method="post" name="login">
<div align="center" style=" margin-top: 40px">
		<li> 
			<label for="text">Login</label> 
			<input type="text" name="username" placeholder="Username" required /> 
		</li><br>
		<li> 
			<label for="password">Contraseña:</label> 
			<input type="password" id="password" name="password" placeholder="Password" required pattern="\S{6,}"> 
		</li><br>
		 
		</ul>
<input name="submit" type="submit" value="Login" />
</form>
</div>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>