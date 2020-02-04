<?php
	include 'db.php';
	include 'user.php';
	if(isset($_POST["firstname"])){
		$obj['firstname'] = $_POST['firstname'];
		$obj['lastname'] = $_POST['lastname'];
		$obj['othername'] = $_POST['othername'];
		$obj['email'] = $_POST['email'];
		$obj['phone'] = $_POST['phone'];
		$obj['category'] = $_POST['category'];
		$obj['ismajor'] = $_POST['major'];
		$obj['institution'] = $_POST['nameofinstitution'];
		$obj['program'] = $_POST['program'];
		$u = new User();
		$ret = $u->insert($con, $obj);
		if($ret == 1){
			$category = $obj['category'];
			$code = "";
			if($category == "Senior High School"){
				$code = 2;
			}else if($category == "Regular University (UnderGraduate)"){
				$code = 1;
			}else if($category == "Regular University (Graduate)"){
				$code = 0;
			}else if($category == "Technical University (UnderGraduate)"){
				$code = 1;
			}else if ($category == "Technical University (Graduate)"){
				$code = 0;
			}else{
				$code = -1;
			}
			header( "Location: social.php?verify=HjAkw123&code=$code");
		}
		else if($ret == 0){
			echo "0 USER EXISTS";
		}else
		{
			echo "-1 CREATE FAILED";
		}
	}else{

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WIS - form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="public/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<style type="text/css">
		*:focus {
			outline: none;
		}
		input, select {
	      border-top-style: hidden;
	      border-right-style: hidden;
	      border-left-style: hidden;
	      border-bottom-style: hidden;
	      background-color: #eee;
	      border-style: none;
	      border-width: 0;
	    }
	</style>

</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-03.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-b-50">
				<form class="login100-form validate-form" method="post" action="reg.php">
					<!-- <h2 class="login100-form-title p-b-50">
						Women In Statistics
					</h2> -->
					<div class="col-12 text-center">
						<img src="logo.jpg" style="width: 250px;height: auto;">
					</div>
					<!-- <span class="login100-form-title p-b-59">
						Sign Up
					</span> -->

					<div class="wrap-input100 validate-input" data-validate="First Name is required">
						<span class="label-input100">First Name</span>
						<input class="input100" type="text" name="firstname" placeholder1234="FirstName...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Last Name is required">
						<span class="label-input100">Last Name</span>
						<input class="input100" type="text" name="lastname" placeholder1234="Last Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<span class="label-input100">Other Name(s)</span>
						<input class="input100" type="text" name="othername" placeholder1234="Other Name(s)...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder1234="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100">
						<span class="label-input100">Phone</span>
						<input class="input100" type="text" name="phone" placeholder1234="Phone...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "required">
						<span class="label-input100">Institutional Category</span>
						<select class="mdb-select md-form input100 border-0" name="category">
							<option style="font-style: italic;" value="" disabled selected>Select One</option>
							<option value="Senior High School">Senior High School</option>
							<option value="Regular University (UnderGraduate)">Regular University (UnderGraduate)</option>
							<option value="Regular University (Graduate)">Regular University (Graduate)</option>
							<option value="Technical University (UnderGraduate)">Technical University (UnderGraduate)</option>
							<option value="Technical University (Graduate)">Technical University (Graduate)</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Institution is required">
						<span class="label-input100">Name of your institution</span>
						<input class="input100" type="text" name="nameofinstitution" placeholder1234="Last Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Institution is required">
						<span class="label-input100">Program of study</span>
						<input class="input100" type="text" name="program" placeholder1234="Last Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 border-0 validate-input">
						<span class="label-input100">Statistics is/was my major?</span>
						<p class="mt-2">
							<label class="mr-5" style="cursor: pointer;"><input style="" type="radio" name="major" value="major"> Yes</label>
							<label style="cursor: pointer;" ><input style="" type="radio" name="major" value="minor"> No</label>
						</p>
					</div>

					<div class="container-login100-form-btn d-flex" style="justify-content: center;">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Submit
							</button>
						</div>

						<!-- <a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a> -->
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="public/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="public/bootstrap/js/popper.js"></script>
	<script src="public/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="public/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="public/daterangepicker/moment.min.js"></script>
	<script src="public/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="public/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script type="text/javascript">
		// Material Select Initialization
            $(document).ready(function() {
            $('.mdb-select').materialSelect();
            });
	</script>

</body>
</html>
