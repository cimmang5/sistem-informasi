<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="http://localhost:8080/codeigniter/data/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/codeigniter/data/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/codeigniter/data/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/codeigniter/data/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/codeigniter/data/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/codeigniter/data/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/codeigniter/data/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/codeigniter/data/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/codeigniter/data/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/codeigniter/data/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:8080/codeigniter/data/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(http://localhost:8080/codeigniter/data/images/putin.jpg);">
					<span class="login100-form-title-1">
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" method="post" action="<?php echo base_url('index.php/akumulasi/login_process'); ?>">
					<div class="wrap-input100 validate-input m-b-26" data-validate="kasih masukko username mu">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="masukkan username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "kasih masukko password mu">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="masukkan password">
						<span class="focus-input100"></span>
					</div>

					<div class="form-group">
                        <input type="radio" name="selection" value="TRUE" checked> admin	
                        <input type="radio" name="selection" value=""> user
                    </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="http://localhost:8080/codeigniter/data/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost:8080/codeigniter/data/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost:8080/codeigniter/data/vendor/bootstrap/js/popper.js"></script>
	<script src="http://localhost:8080/codeigniter/data/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost:8080/codeigniter/data/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost:8080/codeigniter/data/vendor/daterangepicker/moment.min.js"></script>
	<script src="http://localhost:8080/codeigniter/data/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost:8080/codeigniter/data/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost:8080/codeigniter/data/js/main.js"></script>

</body>
</html>