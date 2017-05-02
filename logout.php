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
		<?php
		session_start();
		session_destroy();
		?>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>You have successfully logged off.<br>
				<a href="login.php">Login Again</a>
				</h2>
			</div>
			
		</div>
	</div>
</body>


</html>