<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>
		<link rel="stylesheet" href="login_styleSheet.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
		<nav>
				<div class="topnav" id="myTopnav">
					<a href="index.php" >Home</a>
					<a href="contact.php">Contact Us</a>
					<a href="login.php" class="active">Login</a>
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i>
					</a>
				</div>
		</nav>
		<div class="main-div">
		</div>
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
