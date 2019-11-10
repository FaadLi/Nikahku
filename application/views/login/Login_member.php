<!-- source https://bootsnipp.com/snippets/3522X -->

<!DOCTYPE html>
<html>
    
<head>
	<title>My Awesome Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Custom -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/custom/login.css">

</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<!-- <div class="brand_logo_container">
						<img src="https://cdn.freebiesupply.com/logos/large/2x/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
					</div> -->
                    Logonya
				</div>
				<div class="d-flex justify-content-center form_container">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" id="login" name="" class="form-control input_user" value="" placeholder="username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" id="password" name="" class="form-control input_pass" value="" placeholder="password">
						</div>
						<!-- <div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for<?php echo site_url() ?>/CMember/="customControlInline">Remember me</label>
							</div>
						</div> -->
					</form>
				</div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<input type="button" name="button" id="goButton" class="btn login_btn" onclick="checkLoginPass()" value="Log In">
                    <!-- <a class="btn login_btn" href="<?php echo site_url() ?>/CMember/">Login</a> -->
				</div>
				<div class="mt-4">
					<!-- <div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div> -->
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var checkLoginPass = function () {
			var login = document.getElementById("login").value;
			var pass = document.getElementById("password").value;
			if (login === "admin" && pass === "admin") {
				console.log("masuk");
				alert("Selamat Datang");
				location.replace("<?php echo site_url() ?>/CMember/");
				
			}
			else {
				//do something else;
				console.log("tidak");
				alert("Username atau Password yang dimasukkan salah");
			}
		};
	</script>

</body>
</html>
