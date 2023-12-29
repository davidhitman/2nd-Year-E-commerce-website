<!DOCTYPE html>
<html>
	<head>
		<!--title E-commerce-->
		<title>E-commerce</title>
		 <!--linking to the css file-->
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<!--linking to  the library that contains logos-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<!--setting the logo from the library that was linked to above-->
		<i class="fa fa-american-sign-language-interpreting" style="color: black; left:30px; top:10px; position: absolute; font-size: 60px"></i>
		<p style="color:black; top:-40px; left:110px; font-size: 50px; position: absolute;">H</p>
		<p style="color:black; top:-40px; left:130px; font-size: 50px; position: absolute;">D</p>

		<!--white div containing the login entries and the "Home" link in the navigation bar-->
		<div class="whiteDiv">
			<nav>
				<a href="home.php" class="nav1">Home</a>
			</nav>
			<h1 class="createAcc">Get Started</h1>
			<!--login form-->
			<form action="logIn1.php" method="post">
				<input class="input" name="Email" type="text" placeholder="Enter your Email"><br>
				<input class="input" name="Password" type="password" placeholder="Enter your password"><br>
				<input type="checkbox" name="check1" class="checkbox">
				<label class="checkbox">logIn as admin</label>
				<button type="submit" class="loginButton">Login</button>
			</form>
			<!--button-->
			
			<p class="signUp">If you don't have an account click <a href="signUp.php">SignUp</a>  and create an new account</p>
		</div>
		<!--the colored div on the side that welcomes a user-->
		<div class="welcomeDiv">
			<!--the rest of the links to the navigation-->
			<nav>
				<a class="nav" href="logIn.php">SignIn</a>
				<a class="nav" href="store.php">Basket</a>
			</nav>
			<!--welcoming sentences to the user-->
			<h1 id="greetings">Hello, Friend!</h1>
			<p class="greetingsPara">Enter your details <br> and login to your account</p>
		</div>
	</body>
</html>