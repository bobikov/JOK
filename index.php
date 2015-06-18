<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" content="text/html"/>
	<title>Login/Registration</title>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="animate.css/animate.css">
	<link rel="stylesheet" href="bower_components/fontawesome/css/font-awesome.css">
	<link rel="stylesheet" href="bower_components/mdi/css/materialdesignicons.css">
	<script src="bower_components/jquery/dist/jquery.js"></script>
	<script src="bower_components/modernizr/modernizr.js"></script>
	<script src="bower_components/autosize/"></script>
	<script src="bower_components/noty/js/noty/jquery.noty.js"></script>
	<script src="register.js"></script>
	<script src="remind.js"></script>
</head>
<body>
	<div class="main_container">
	<div class="login animated fadeIn" id="mainlogin">
		<h1>Login</h1>
		<form action="" method="post">
			<label for="email">email:</label><br>
			<input type="text" minlength="4" name="email" id="email"><br>
			<label for="password">password:</label><br>
			<input type="password" minlength="4" name="password" id="password"><br>
			<a href="#" id="reminder">Forgot password</a>
			<input type="submit" name="action" id="login" value="Submit">
			<div class="warn_wrapper">
				All the fields are empty <i class="fa fa-warning"></i>
			</div>

		</form>
	</div>
	<div class="register animated fadeIn" id="mainregister">
		<h1>Registration</h1>
		<form action="" method="post">
			<label for="username" >username:</label><div class="clean_register_form">
			<i class="fa fa-repeat"></i></div><br>
			<input type="text" minlength="4"  name="username" id="r_username"><br>
			<label for="password">password:</label><br>
			<input type="password"  minlength="4" name="password" id="r_password"><br>
			<label for="email">email:</label><br>
			<input type="text" name="email" id="r_email"><br>
			<input type="submit" name="action" id="register" value="Submit">
			
			<div class="warn_wrapper">
				All the fields are empty <i class="fa fa-warning"></i>

			</div>
		</form>
		
	</div>
	</div>
</body>
</html>