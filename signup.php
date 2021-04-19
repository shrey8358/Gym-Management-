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
				<li><a href="about.html">About</a></li>
				<li><a href="https://healthxp.in">Supplements</a></li>
				<li><a href="contact.html">Contact</a></li>
				</ul>
		</div>
		<div class="signupform">
			<form class="signup" action="dashboard.php">
	<h1>Sign Up</h1>
	<input type="text" name="Name" placeholder="Name" id="Name">
	<input type="number" name="Age" placeholder="Age" id="Age" min="10">
	<input type="text" name="Username" placeholder="Username" id="Username">
	<input type="text" name="Email" placeholder="Email" id="Email">
	<input type="Password" name="Password" placeholder="Password" id="Password">
	<button type="submit" name="submit" value="login">Sign Up</button>
</form>
<script src="main.js"></script>
</body>	
</html>