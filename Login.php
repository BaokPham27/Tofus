
<!Doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="styleLogin.css">
</head>

<body>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span style="color:rgb(184, 3, 40)">Log In </span><span style="color:rgb(184, 3, 40)">Sign
								Up</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<form class="card-front" action="log.php" method="post">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3" style="color:#fff">Log In</h4>
											<div class="form-group">
												<input type="email" name="email" class="form-style" placeholder="Email">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style" placeholder="Password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" href="#" name="btn-log" class="btn mt-4">Login</button>
											<p class="mb-0 mt-4 text-center"><a href="#" class="link">Forgot your
													password?</a></p>

										</div>
									</div>
								</form>

								<form class="card-back" id="#card-back" action="reg.php" method="post">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-3 pb-3" style="color:#fff">Sign Up</h4>
											<div class="form-group">
												<input type="text" name="fullName" class="form-style"
													placeholder="Full Name">
												<i class="input-icon uil uil-user"></i>
											</div>
											<div class="form-group mt-2">
												<input type="tel" name="phoneNumber" class="form-style"
													placeholder="Phone Number">
												<i class="input-icon uil uil-phone"></i>
											</div>
											<div class="form-group mt-2">
												<input type="email" name="email" class="form-style" placeholder="Email">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="text" name="address" class="form-style"
													placeholder="Address">
												<i class="input-icon uil uil-map-marker-alt"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style"
													placeholder="Password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" href="#" name="btn-reg"
												class="btn mt-4">Register</button>
										</div>
									</div>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="scriptLogin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function() {
  var loginButton = $('#loginButton');
  var cardFront = $('.container2');

  loginButton.click(function() {
    cardFront.toggle();
  });

 
});


</script>
</body>

</html>