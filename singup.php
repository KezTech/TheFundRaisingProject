
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sing Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="singopt/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="singopt/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="singopt/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="singopt/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="singopt/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="singopt/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="singopt/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="singopt/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="singopt/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="singopt/login/css/main.css">
<!--===============================================================================================-->



<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

       <!-- Styles -->
    <link rel="stylesheet" href="style.css">






</head>
<body>
		<?php include 'topbar.php';?>


	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">


				<form class="login100-form validate-form flex-sb flex-w" method="post" action="singup.php">
					<span class="login100-form-title p-b-51">
						Sing Up Donor Account
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
						<input class="input100" type="text" name="email" placeholder="email" <?php echo $email; ?>>
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password_1" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password_2" placeholder="Confirm Password">
						<span class="focus-input100"></span>
					</div>

					<div data-validate = "Donation Amount">
						<input class="input100" type="text" name="donation" placeholder="">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" name="singup" type="submit">
								Sing Up
							</button>
					</div>

				</form>


			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>














	
	
<!--===============================================================================================-->
	<script src="singopt/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="singopt/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="singopt/login/vendor/bootstrap/js/popper.js"></script>
	<script src="singopt/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="singopt/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="singopt/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="singopt/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="singopt/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="singopt/login/js/main.js"></script>

</body>
</html>


<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'admin', 'admin123', 'nepadonor');






// REGISTER USER

if (isset($_POST['singup'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $donation = mysqli_real_escape_string($db, $_POST['donation']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }

  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	echo "<script type='text/javascript'>alert('Password Not matched');</script>";
	
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
		echo "<script type='text/javascript'>alert('User Already Exist');</script>";
    }

    if ($user['email'] === $email) {
		echo "<script type='text/javascript'>alert('E-mail already exist');</script>";
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password,donateamt) 
  			  VALUES('$username', '$email', '$password','$donation')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
	  $_SESSION['success'] = "You are now logged in";
	  session_start($username);
	  echo "<script type='text/javascript'>alert('Successful....... Please Login To Dashboard');</script>";
  	header('location: index.php');
  }
}