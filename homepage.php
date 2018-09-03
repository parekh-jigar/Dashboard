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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body background-image: url(images/bgimage.jpg);>
	<div class="limiter">
		<div class="container-homepage100">
			<div class="wrap-homepage100">
				<center>
					<h2>Dashboard</h2>
					<h3>Welcome 
						<?php echo $_SESSION['username'] ?>
					</h3>	
					
				</center>

				<form class="myform" action="" method="post">
					<div class="container-homepage100-form-btn">
						<button class="homepage100-logout-btn" name="logout" type="submit" id="logout_btn" value="Log out">
							Logout
						</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</body>

</html>