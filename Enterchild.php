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


				<form class="login100-form validate-form flex-sb flex-w" method="post" action="enterchild.php">
					<span class="login100-form-title p-b-51">
						Enter Chil's Details 
					</span>

					


					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="name" placeholder="Child's Name" value=""  >
						<span class="focus-input100"></span>	
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Caste is required">
						<input class="input100" type="text" name="caste" placeholder="Caste" value="">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate = "Gender is required">
						<input class="input100" type="text" name="gender" placeholder="Gender" value="">
						<span class="focus-input100"></span>
					</div>
					

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Age is required">
						<input class="input100" type="text" name="age" placeholder="Age" value="">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Religion is required">
						<input class="input100" type="text" name="religion" placeholder="Religion" value="">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Address is required">
						<input class="input100" type="text" name="address" placeholder="Address" value="">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Interest is required">
						<input class="input100" type="text" name="interest" placeholder="Interest">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Description is required">
						<input class="input100" type="text" name="description" placeholder="Description">
						<span class="focus-input100"></span>
					</div>
					
					
					

					<div class="container-login100-form-btn m-t-17">
						
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" name="child" type="submit">
								Input Child Data
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
$name = "";
$caste="";
$gender = "";
$age = "";
$religion = "";
$address = "";
$interest = "";
$description = "";




$errors = array(); 
	

// connect to the database
$db = mysqli_connect('localhost', 'admin', 'admin123', 'nepachild');


// VAlidate
if (isset($_POST['child'])) {

	
	
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $caste = mysqli_real_escape_string($db, $_POST['caste']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $religion = mysqli_real_escape_string($db, $_POST['religion']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $interest = mysqli_real_escape_string($db, $_POST['interest']);
  $description = mysqli_real_escape_string($db, $_POST['description']);

 


  $query = "INSERT INTO child (name, gender, age, caste, address, interest, religion, Description) 
				  VALUES('$name', '$gender', '$age', '$caste', '$address', '$interest', '$religion', '$description' )";
				  
				  echo $query;

		mysqli_query($db, $query);
		

		
		  	  
  }

  
   
  
    


?>