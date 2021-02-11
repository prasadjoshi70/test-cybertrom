<?php
ob_start();
session_start();
include("includes/connection.php");
include("includes/common.php");
$error_msg = 0;

if((!empty($_POST['username'])) && (!empty($_POST['password']))) 
{
    $pd_user = mysqli_real_escape_string($conn,$_POST['username']);
    $pd_password = mysqli_real_escape_string($conn,$_POST['password']);
    

    $query ="SELECT * FROM users WHERE username='$pd_user' AND password='$pd_password' AND status=1";
    $result = mysqli_query($conn, $query);
	$num = 0;
	if ($result) 
    { 
	$num = mysqli_num_rows($result);
	}
	//print_r($result);
   if($num>0) {
		while($rows=mysqli_fetch_object($result))
		{
			$_SESSION['username']= $pd_user;
			$_SESSION['name']= $rows->name;
			$_SESSION['userid']= $rows->id;
		}
        
        header ('Location:dashboard.php');
    } 
	else {
            $error_msg = 1;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>CyberTrom | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="icon" type="image/png" href="logincss/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logincss/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logincss/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logincss/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logincss/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="logincss/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logincss/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logincss/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="logincss/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="logincss/css/util.css">
	<link rel="stylesheet" type="text/css" href="logincss/css/main.css">
<!--===============================================================================================-->

    <style>
		.error_msg
		{
			color:red;
			font-weight:bold;
			padding-bottom:20px;
			font-size: 13px;
		}
		
		.green{
			color:green;
		}
		
		.blue
		{
			color:#058eff;
		}
	
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
   
  </head>
<body>
  
  
  <div class="limiter">
		<div class="container-login100">
			
			<div class="logo-box">
				<span class="">
					
				</span>
					
			</div>
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" enctype="multipart/form-data" action="" method="post">
					
					
					
					
					<?php if($error_msg==1) { ?>
						<div class="error_msg text-center">Username/ Password Combination Wrong</div>
					<?php } else {?>
							<div class="error_msg blue text-center">Login to Continue</div>
					<?php } ?>

					<div class="wrap-input100 validate-input m-t-15 m-b-35" data-validate = "Enter username">
						<input class="input100" type="email" name="username" id="username">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password" id="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Login" id="submit"/>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
  
  
  
	
	
	
	

</form>


<!--===============================================================================================-->
	<script src="logincss/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="logincss/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="logincss/vendor/bootstrap/js/popper.js"></script>
	<script src="logincss/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="logincss/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="logincss/vendor/daterangepicker/moment.min.js"></script>
	<script src="logincss/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="logincss/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="logincss/js/main.js"></script>

</body>
</html>