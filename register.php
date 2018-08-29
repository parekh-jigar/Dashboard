<?php
require "dbconfig/config.php";
?>

<!DOCTYPE html>
<html>

<head>

	<title>Registration Page</title>
	<link rel="stylesheet" href="css/register.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>



<body background="bgimage.jpg">
	<div class="limiter">
		<div class="container-register100">
			<div class="wrap-register100">
				<div class="register100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="register100-form-title-1">
						Registeration form
					</span>
				</div>

				<form class="register100-form" action="register.php" method="post">
					<div class="wrap-register100" data-validate="Username is required">
						<span class="label-register100">Username</span>
						<input class="register100" type="text" name="username" placeholder="Enter username">
						<span class="focus-register100"></span>
					</div>

					<div class="wrap-register100" data-validate = "Password is required">
						<span class="label-register100">Password</span>
						<input class="register100" type="password" name="password" placeholder="Enter password">
						<span class="focus-register100"></span>
					</div>

					<div class="wrap-register100 " data-validate = "Password is required">
						<span class="label-register100">Confirm Password</span>
						<input class="register100" type="password" name="cpassword" placeholder="Confirm password">
						<span class="focus-register100"></span>
					</div>

					<div class="container-register100-form-btn">
						<button class="register100-form-btn" name="submit_btn" type="submit" value="Sign Up">
							Sign Up
						</button><br>
						<a href= "index.php"><input type="button" class="back_btn" value="Back"/></a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php
	if(isset($_POST['submit_btn']))
	{
					//echo '<script type="text/javascript"> alert("Sign up button clicked") </script>';

		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];

		if($password==$cpassword)
		{
			$query= "select * from user WHERE username='$username'";
			$query_run = mysqli_query($con,$query);

			if(mysqli_num_rows($query_run)>0)
			{
							// There is already a user with the same username
				echo '<script type="text/javascript"> alert("Username already exists, try another username") </script>';
			}
			else
			{
				$query= "insert into user values('$username','$password')";
				$query_run= mysqli_query($con,$query);
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("User registered. Go to login page") </script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error!") </script>';
				}
			}
		}
		else
		{
			echo '<script type="text/javascript"> alert("Both the passwords are different") </script>';
		}
	}

	?>

</div>
</body>

</html>