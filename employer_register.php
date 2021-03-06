<!DOCTYPE html>
<html>
<head>
	<title>Job Portal</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="recruiter-validation.js">
		
			
	</script>
</head>
<body>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li style="float: right, background-color:orange"><a  href="login.php">Login</a></li>
			<li style="float: right"><a class="active" href="register.php">Register</a></li>
		</ul>
	</nav>
		
	<div class="container" id="recruiter-register">

		<div class="wrapper-recruiter">
		<br>
		<form method="post" action="employer_profile.php">

			<h2 style="color: #e4648f;">Complete your recruiter account</h2>
			<hr>
			<p style="text-align: center;">Already have a recruiter account? <a href="#">Sign in.</a></p>

				<label for="recruiter_email"></label>Email <input type="email" name="recruiter_email" id="label"><br><br>

				Password <input type="password" name="recruiter_password" id="label"><br><br>

				Firstname <input type="text" name="recruiter_fname" id="label"><br><br>

				Lastname <input type="text" name="recruiter_lname" id="label"><br><br>

				Phone number <input type="number" name="recruiter_phone" id="label"><br><br>

				Company name<input type="text" name="recruiter_company" id="label"><br><br>

				Company size <select name="company_size"><option value="10-20" id="label">10-20</option>
									<option value="20-50" id="label" name="company_size">20-50</option>
									<option value="50-100" id="label" name="company_size">50-100</option>
									<option value="100-500" id="label" name="company_size">100-500</option>
							</select>
				<br><br>
				
				Company type <br><br>

				<input type="radio" name="company_type" value="Direct employer"> Direct employer<br><br>

				<input type="radio" name="company_type" value="Charity"> Charity<br><br>

				<input type="radio" name="company_type" value="Recuitment consultancy"> Recruitment consultancy<br><br>

				<input type="button" name="recruiter_account" value="Create account" id="recruiter_submit">

				<p style="text-align: center;"><small>By creating an account you agree to our <a href="#">Terms and Conditions</a> and to receive emails on our offers and industry news. This service can be managed in your Account settings.</small></p>
    <br />
	</form>
    </div>
    </div>
	</div>

	<div class="footer">


		<a href="#" class="fa fa-facebook"></a>
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-google"></a>
		<a href="#" class="fa fa-linkedin"></a>
	

		<p> <small>Copyright &copy; 2017</small></p>

	</div>

</body>
</html>