<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./style.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="validate.js"></script>
	<style type="text/css">
		li{color: red;}
	</style>
</head>
<body>

	<div class="container  text-center mt-3">
		<img class = "text-center" src="simpli.jpg" alt="simplilearn logo">
	</div>

	<div class="container text-center  mt-3 mb-4 p-2" >

		<h1>Registration Form</h1>
		Please fill the form the register. 
	</div>

	<form action="db.php" method="POST">
	
		<div class="container col-md-5 justify-content-center pt-2">

			<div id="message"></div>
			<div class="mb-3">
				<label for="name" class = "form-label">Name </label>
				<input type="text" class="form-control" placeholder=" Name" name="name" id="name" required>
			</div>
	
			<div class="mb-3">
				<label  for="email" class="form-label">Email</label>
				<input type="text" class="form-control" placeholder="Email" name="email" id="email" onblur="validateEmail();" required>
			</div>
			<div id="mailmessage"></div>
			<div class="mb-3">
				<label  for="contact">Contact No</label>
				<input type="text" class="form-control" placeholder="Contact No." name="contact" id="contact" onblur="validateNumber();" required>
			</div>
			<div id="nummessage"></div>
			<div class="mb-3">
				<label for="password" class="form-label">Password</label>
				<input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
			</div>

			<div class="mb-3">
				<label  for="cpassword" class="form-label">Confirm Password</label>
				<input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" id="cpassword" onblur="checkPass();" required>
			</div>

			<div id="passmsg"></div>
			
			<div class="mb-3 col-md-4">
				<button type="submit" class="btn btn-success m-2 text-center" name="register" id="register" >Register</button>

			</div>
		</div>
	</form>
   
	
	

			

</body>
</html>