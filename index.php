<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
		<link rel="stylesheet" href="index_styleSheet.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
		<nav>
			<div class="topnav" id="myTopnav">
				<a href="index.php" class="active">Home</a>
				<a href="contact.php">Contact Us</a>
				<a href="Admin/Login_admin.php">Login</a>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</nav>

		<div class="main-div">
			<div class="subDiv-one">
				<div class="subDiv-two">
					<div class="subDiv-three">
						
						<p>EASTERN</p>
						<div id="div-one">
							<hr>
							<p>SRI LANKA</p>
							<hr>
						</div>
						<div id="div-two">
							<img class="mySlides" src="navy_blue-PhotoRoom.png-PhotoRoom.png">
  							<img class="mySlides" src="dark_forest_green-PhotoRoom.png-PhotoRoom.png">
						</div>
					</div>
				</div>
			</div>

			<div class="shop-btn">
				<a href="oderPage.php" class="button">
					<div class="button__line"></div>
					<div class="button__line"></div>
					<span class="button__text">SHOP NOW</span>
				</a>
			</div>
		</div>
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