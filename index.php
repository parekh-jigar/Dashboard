<?php
session_start();
require "dbconfig/config.php";

if(isset($_POST['login']))
{
	$username= $_POST['username'];
	$password= $_POST['password'];
	$query = "select * from user where username='$username' and password='$password' ";
			//echo $query;
	$query_run = mysqli_query($con,$query);
			//echo mysqli_num_rows($query_run);
	if($query_run)
	{
		if(mysqli_num_rows($query_run)>0)
		{
					// Valid
			$_SESSION['username']= $username;
			$_SESSION['password']= $password;
			header('Location: homepage.php');
					//echo '<script type="text/javascript"> alert("VALID credentials") </script>';
		}
		else
		{
					// Invalid
			echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:#ecf0f1">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form" action="" method="post">
					<div class="wrap-input100" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login" type="submit" value="Login">
							Login
						</button><br>
						<a href= "register.php"><input type="button" class="register100-form-btn-index" value="Register"/></a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>