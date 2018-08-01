<?php

?>

<!DOCTYPE html>
<html>

<head>

<title>Registration Page</title>

<link rel="stylesheet" href="css/style.css">

</head>

<body style="background-color:#95a5a6">
		<div id="main-wrapper">
			<center>
				<h2>Registration Form</h2>	
				<img src="images/avatar.png" class="avatar"/>
			</center>

			<form class="myform" action="index.php" method="post">
			<label>Username: </label><br>
			<input type="text" class="inputvalues" placeholder="Type your username"/><br>
			<label>Password: </label><br>
			<input type="password" class="inputvalues" placeholder="Type your password"/><br>
			<label>Confirm Password: </label><br>
			<input type="password" class="inputvalues" placeholder="Confirm password"/><br>
			<input type="submit" id="signup_btn" value="Sign Up"/><br>
			<input type="button" id="back_btn" value="Back"/>
		</form>

		</div>
</body>

</html>