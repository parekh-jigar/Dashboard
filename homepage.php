<?php
session_start();
require_once('dbconfig/config.php');

if(isset($_POST['logout']))
{
	session_destroy();
	header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>

<head>

	<title>Home Page</title>

	<link rel="stylesheet" href="css/homepage.css">

</head>

<body style="background-color:#95a5a6">
	<div class="limiter">
		<div class="container-homepage100">
			<div class="wrap-homepage100">
				<center>
					<h2>Login Form</h2>
					<h3>Welcome 
						<?php echo $_SESSION['username'] ?>
					</h3>	
					<img src="images/avatar.png" class="avatar"/>
				</center>

				<form class="myform" action="" method="post">

					<input name="logout" type="submit" id="logout_btn" value="Log out"/>

				</form>

			</div>
		</div>
	</div>
</body>

</html>