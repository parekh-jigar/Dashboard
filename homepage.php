<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

	<title>Home Page</title>

	<link rel="stylesheet" href="css/style.css">

</head>

<body style="background-color:#95a5a6">
	<div id="main-wrapper">
		<center>
			<h2>Login Form</h2>
			<h3>Welcome 
				<?php echo $_SESSION['username'] ?>
			</h3>	
			<img src="images/avatar.png" class="avatar"/>
		</center>

		<form class="myform" action="homepage.php" method="post">
			
			<input type="button" id="logout_btn" value="Log out"/>
			
		</form>

	</div>
</body>

</html>