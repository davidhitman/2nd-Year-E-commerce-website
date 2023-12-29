<!DOCTYPE html>
<html>
	<head>
		<!--title E-commerce-->
		<title>E-commerce</title>
		 <!--linking to the css file-->
		<link rel="stylesheet" type="text/css" href="../css/signup.css">
		<!--linking to  the library that contains logos-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	</head>
	<body>
		<!--setting the logo from the library that was linked to above-->
		<i class="fa fa-american-sign-language-interpreting" style="color: black; left:30px; top:10px; position: absolute; font-size: 60px"></i>
			<p style="color:black; top:-40px; left:110px; font-size: 50px; position: absolute;">H</p>
			<p style="color:black; top:-40px; left:130px; font-size: 50px; position: absolute;">D</p>
			<!--white div containing the signup entries and the "Home" link in the navigation bar-->
		<div class="whiteDiv">
			<nav>
				<a href="home.php" class="nav1">Home</a>
			</nav>
			<h1 class="createAcc">Create Account</h1>
			<!--login form-->
			<form>
				<input class="input" id="name" name="CustomerName" type="text" placeholder="Enter your Full Names"><br>
				<input class="input" id="email" name="Email" type="email" placeholder="Enter your Email"><br>
				<input class="input" id="TelNum" name="TelNumber" type="text" placeholder="Enter your Telephone Number"><br>
				<input class="input" id="address" name="Address" type="text" placeholder="Enter your Address"><br>
				<input class="input" id="password" name="Password" type="password" placeholder="Enter your password"><br>
			</form>
			<!--button-->
			<button class="signupButton" onclick="register()">SignUp</button>
			<p class="login">Already have an account? <a href="login.php">LOGIN</a>.</p>
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
			<p class="greetingsPara">Enter your personal details <br> and start journey with us</p>
		</div>


		<script>
			function register() {
                //Create request object 
                let request = new XMLHttpRequest();

                //Create event handler that specifies what should happen when server responds
                request.onload = () => {
                    //Check HTTP status code
                    	if (request.status === 200) {
                        		//Get data from server
                        } else
                            alert("Error communicating with server: " + request.status);
                        };

                        //Set up request with HTTP method and URL 
                        request.open("POST", "signUp1.php");
                        request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                        //Extract registration data
                        let name = document.getElementById("name").value;
                        let email = document.getElementById("email").value;
						let telNum = document.getElementById("TelNum").value;
                        let address = document.getElementById("address").value;
                        let password = document.getElementById("password").value;

                        //Send request
                        request.send("&CustomerName=" + name + "&Email=" + email + "&TelNumber=" + telNum + "&Address=" + address + "&Password=" + password);

						document.getElementById("name").value = "";
                        document.getElementById("email").value = "";
						document.getElementById("TelNum").value = "";
                        document.getElementById("address").value = "";
                        document.getElementById("password").value = "";
                };
			
		</script>
	</body>
</html>