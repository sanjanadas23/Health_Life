
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health life-register</title>
    <link rel="stylesheet" href="../Assets/style/login.css">

	<!-- Links -->
	<link rel="stylesheet" href="../Assets/style/login.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!-- Register code -->
    <div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login" method="post" action="../Actions/register.php">
                <h1>Sign Up</h1>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input"
                           placeholder="Username" name="username"
                        required
                    >
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="email" class="login__input" required
                           placeholder="Email" name="email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input"
                           placeholder="Password" name="password" required >
				</div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="text" class="login__input"
                           placeholder="Age" name="age" required >
                </div>

				<!-- Captcha verification -->
				<div class="g-recaptcha brochure__form__captcha" data-sitekey="6Lf6SoAlAAAAABQsSk7nmFs7-dJwZ7OBvwInfQ_w"></div>
				
				<!-- Captcha Verification ended -->
				<button class="button login__submit">   
					<span class="button__text">Sign Up</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			<!-- <div class="social-login">
				<h3>log in via</h3>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div> -->
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
    <!-- Register code ended -->

	<!-- Scripts start -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<script src="https://www.google.com/recaptcha/api.js"></script>

	<!-- Scripts ended -->


</body>
</html>