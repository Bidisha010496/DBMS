<!DOCTYPE html>
<html  lang="en">
<head>
	<title>ProjectHub | Welcome</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
<div class="row slideshow">
		<img height="813px" name="slide" src="" width="1500px" />
</div>
<div class="header"></div>
<div class="header-name">ProjectHub</div>
<div id="header-line">...Where Dreams Meet Resources</div>
<br><br><br><br><br><br><br>
<div>
					<?php
					$id=$_GET["id"];
					if($id==1)
					echo "<h1>Incorrect Username or Password</h1>";
					?>
	<div class="col-md-6"><center>
		<div class="signin-div-back opacity">I Am A Member!
			<div class="signin"><br>

				<form class="form" action="http://localhost/ProjectHub-master/login.php" method="POST">

					<input id="name" type="email" name="email1" placeholder="Whats Your Email?" required><br><br>
					<input type="password" name="password1" placeholder="Prove That It's You!" required><br><br>
					<input class="login-button" type="submit" name="submit" value="Let Me In">
				</form>
			</div>
		</div></center>
	</div>
	<div class="col-md-6"><center>
		<div class="signup-div-back opacity">I Wanna Be A Member!
			<div class="signup"><br>
				<form name="signupform" action="http://localhost/ProjectHub-master/signup.php" method="POST" onsubmit="return signupvalidation()">

					<input type="text" name="name" placeholder="Full Name" required><br><br>
					<input type="email" name="email" placeholder="Whats your Email?" required><br><br>
					<input type="text" name="usn" placeholder="Whats your USN?" required><br><br>
					<input class="input-col2" type="password" name="password" placeholder="Minimum 6 Characters Password" required> 
					<input class="input-col2" type="password" name="repassword" placeholder="Confirm Password" required><br><br>
					<input class="input-col2" type="text" name="branch" placeholder="Branch" required>
					<input class="input-col2" type="text" name="sem" placeholder="Semester" required><br><br>
					<span id="pass-msg" class="error-msg"></span><br>
					<input class="login-button" type="submit" name="submit" value="Grant Me Membership">
				</form>
			</div>
		</div></center>
	</div>
</div>
<div class="footer" style="position: fixed; bottom: 0;"><center>
	Developers: Mohinishree Asthana | Bidisha Das Baksi | Avinash Singh<br>
	All Rights Reserved... About Developers</center>
</div>

<script type="text/javascript">	
	function signupvalidation()
	{
		var x = document.forms["signupform"]["password"].value;
		var y = document.forms["signupform"]["repassword"].value;
		var flag=0;
		if (x!=y) 
		{
			document.getElementById('pass-msg').innerHTML = "Oopss!! Password Miss Match!!!";
			return false;
		};
	}
	var i = 0;
	var path = new Array();

	path[0] = "pics/slideshow/pic7.JPG";
	path[1] = "pics/slideshow/pic8.JPG";
	path[2] = "pics/slideshow/pic9.JPG";
	path[3] = "pics/slideshow/pic10.JPG";
	path[4] = "pics/slideshow/pic1.JPG";
	path[5] = "pics/slideshow/pic2.JPG";
	path[6] = "pics/slideshow/pic3.JPG";
	path[7] = "pics/slideshow/pic5.JPG";
	path[8] = "pics/slideshow/pic6.JPG";
	path[9] = "pics/slideshow/pic11.JPG";
	//path[10] = "pics/slideshow/pic11.JPG";

	function swapImage()
	{
		document.slide.src = path[i];
   		if(i < path.length - 1) i++; else i = 0;
   		setTimeout("swapImage()",7000);
	}
	window.onload=swapImage;
			
</script>
</body>

</html>
