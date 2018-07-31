<?php

?>

<!DOCTYPE html>
<html>

<head>

<title>Login Page</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body style="background-color:#95a5a6">
		<div id="main-wrapper">
			<center>
				<h2>Login Form</h2>	
				<img src="images/avatar.png" class="avatar"/>
			</center>

			<form class="myform" action="index.php" method="post">
			<label>Username: </label><br>
			<input type="text" class="inputvalues" placeholder="Type your username"/><br>
			<label>Password: </label><br>
			<input type="password" class="inputvalues" placeholder="Type your password"/><br>
			<input type="submit" id="login_btn" value="Login"/><br>
			<input type="button" id="register_btn" value="Register"/>
		</form>

		</div>
</body>

</html>