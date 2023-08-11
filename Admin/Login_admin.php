<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login Admin</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body>
		<nav>
			<div class="topnav" id="myTopnav">
				<a href="http://localhost/order/index.php" >Home</a>
				<a href="http://localhost/order/contact.php">Contact Us</a>
				<a href="http://localhost/order/Admin/Login_admin.php" class="active">Login</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</nav>
		<div class="container">
		  <h2>Login</h2>
		  <form method="post" action="Login_admin.php">
			<label for="username">
				<img src="user.png" width="27px" height="27px">
				<input type="text" id="username" name="username" placeholder="Username" required>
			</label>
			<br>
			
			<label for="password">
				<img src="lock.png" width="27px" height="27px">
				<input type="password" id="password" name="password" placeholder="Password" required>
			</label>
			<br>
			
			<input id="btn_login" type="submit" value="Login">
		  </form>
		</div>

		<?php
			// Check if form is submitted
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				// Get form input values
				$username = $_POST['username'];
				$password = $_POST['password'];

				// Check login condition
			if ($username === 'admin' && $password === '123') {
					// Successful login
				header("Location: http://localhost/order/Admin/admin_index.php");
			} else {
				// Failed login
				echo '<script>alert("Invalid username or password")</script>';
				}
			}
		?>
	<script rel="JavaScript" src="index_scriptSheet.js"></script>
		<script>
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
	</script>
	</body>
</html>