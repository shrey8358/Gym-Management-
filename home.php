<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Gym Management System</title>
</head>
<body>
	<div class="banner">
		<div class="navbar">
			<h1> <a href="home.php" class="gymlogo">Gym Management System</a> </h1>
				<ul>
				<li><a href="about.php">About</a></li>
				<li><a href="https://healthxp.in">Supplements</a></li>
				<li><a href="contact.php">Contact</a></li>
				</ul>
		</div>
		<div class="signinform">
			<form class="signin" action="temp.php" method="post">
			<h1>Sign In</h1>
			<input type="text" name="Username" placeholder="Username" id="Username">
			<input type="text" name="Email" placeholder="Email" id="Email">
			<input type="Password" name="Password" placeholder="Password" id="Password">
			<button type="submit" name="submit" value="login">Sign In</button>
			</form>
				<form id="already" method="post" action="signup.php">
				<button id="alreadytext">New Here? Click to Sign up!</button>
				</form>
		</div>
<script src="main.js"></script>
</body>	
</html>

