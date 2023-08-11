<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contact Us</title>
		<link rel="stylesheet" href="contact_styleSheet.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
		<nav>
				<div class="topnav" id="myTopnav">
					<a href="http://localhost/order/index.php" >Home</a>
					<a href="http://localhost/order/contact.php" class="active">Contact Us</a>
					<a href="http://localhost/order/Admin/Login_admin.php" >Login</a>
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i>
					</a>
				</div>
		</nav>
		<div class="main-div">
			<div class="container">
				<h1>Get In Touch</h1>
				<div className="contactus_div" style="display:flex;">
					<div class="div1"><img src="astropic.png" width="200px" height="300px"></div>
					<div class="div2">
						<form style="display:flex; flex-direction:column;" action="https://formsubmit.co/017d60356378d6bb1b16323985f505fd" method="POST">
							<input type="text" name="Name" placeholder="Full Name" required></input>
							<input type="email" name="Email" placeholder="Email" required></input>
							<input type="text" name="Subject" placeholder="Subject"></input>
							<textarea name="Message" placeholder="Message ..." required></textarea>
							<button type="submit">Send</button>
						</form>
					</div>
				</div>
			</div>
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
