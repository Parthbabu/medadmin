<?php
  
if(isset($_POST["tab"]))
{
	
	$uid=$_POST["id"];
	$pass=$_POST["pass"];
	
	require 'shared/classuser.php';
    $conn=new user_all;
    
$result=$conn->loginselect($uid,$pass);

if($result->num_rows===1)
{
	//echo "aaa";
	$row=$result->fetch_assoc();
	$id=$uid;
//$name=$row["usr_name"];
	$token=$row["usr_token"];
	$flag=1;
	$type="Admin";
	if($row["usr_verify"]==$flag)
	{
		$_SESSION["pid"]=$id;
		$_SESSION["pname"]=$row["usr_name"];
	if($row["usr_type"]==$type)
	{
		header('location:web/index.php');
	}
	else
	{
		echo '<h1><div class="btn btn-dark btn-lg btn-block">You are not an Admin </div></h1>';
		//header('location: ../visitors/index.php');
	}
}
}
}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="shared/loginformassets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="shared/loginformassets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="shared/loginformassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="shared/loginformassets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="shared/loginformassets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="shared/loginformassets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="shared/loginformassets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="shared/loginformassets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="shared/loginformassets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="shared/loginformassets/css/util.css">
	<link rel="stylesheet" type="text/css" href="shared/loginformassets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
<form method="post" action="index.php">
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="id">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="tab" >
								LOGIN
							<!-- <input type="submit" name="tab" value="LogIn" > -->
							</button>
						</div>
					</div>
</form>
				

			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="shared/loginformassets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="shared/loginformassets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="shared/loginformassets/vendor/bootstrap/js/popper.js"></script>
	<script src="shared/loginformassets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="shared/loginformassets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="shared/loginformassets/vendor/daterangepicker/moment.min.js"></script>
	<script src="shared/loginformassets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="shared/loginformassets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="shared/loginformassets/js/main.js"></script>

</body>
</html>