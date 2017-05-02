<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Training & Placement</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="style1.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<form method="POST" action="new.php" name="f1">
			<label for="username">Enrollment No.</label>
			<br/>
			<input type="text" id="username" name="username">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" name="passw">
			<br/>
			<label for="dob">Date Of Birth</label>
			<br/>
			<input type="text" id="dob" name="dob">
			<br/>
			<label for="username">Year</label>
			<br/>
			<input type="text" id="year" name="year">
			<br/>			
			<h5><a href="admin.php">Login As Admin</a></h5>
			<br>
			<input type="submit" value="Submit" >
			<br/>
			</form>
		</div>
	</div>
	<br>
	<br>
</body>


</html>