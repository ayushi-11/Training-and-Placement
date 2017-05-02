<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Training & Placement </title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="assets/css/styles.css">

	<!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>
<body class="home">
<?php
 session_start();
	
?>
<header id="header">
	<div id="head" class="parallax" parallax-speed="2">
		<h1 id="logo" class="text-center">
			<img class="img-circle" src="assets/images/logo.png" alt="">
			<span class="title">JAYPEE INSTITUTE OF INFORMATON TECHNOLOGY</span>
			<span class="title">ADMINISTATOR</span>
			
				
		</h1>
	</div>

	<nav class="navbar navbar-default navbar-sticky">
		<div class="container-fluid">
			
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				   <span class="icon-bar"></span>
				   				    </button>
			</div>
			
			<div class="collapse navbar-collapse " id="mynavbar">
				
				<ul class="nav navbar-nav">
				<li><a href="indexa.php">Home</a></li>
					<li class="active"><a href="newsa.php">NewsFeed</a></li>
					<li><a href="coorda.php">Coordinators</a></li>
					
					<li><a href="logout.php">Logout</a></li>
				</ul>
			
			</div><!--/.nav-collapse -->	
		</div>	
	</nav>
</header>

<main id="main">

	<div class="container">
	
	<p>
	<h3><u><b>Fill the Deatials as Following...</b></u></h3>
	<center>
	<form action="action.php" name="f3" method="POST">

	<div class="form-group">
	<label for="username" class="col-sm-2">Company Name:</label>
	<div class="col-sm-10">
	<input type="text" id="cname" name="cname" class="form-control" placeholder="Enter Company Name">
	</div>
	</div><br><br>

	<div class="form-group">
	<label for="username" class="col-sm-2">Subject:</label>
	<div class="col-sm-10">
	<input type="text" id="sub" name="sub" class="form-control" placeholder="Enter Subject">
	</div>
	</div><br><br>

	<div class="form-group">
	<label for="username" class="col-sm-2">Date of Drive:</label>
	<div class="col-sm-10">
	<input type="text" id="dod" name="dod" class="form-control" placeholder="Enter Date of Drive">
	</div>
	</div><br><br>

	<div class="form-group">
	<label for="usr" class="col-sm-2">CGPA:</label>
	<div class="col-sm-10">
	<input type="text" id="cgpa" name="cgpa" class="form-control" placeholder="Enter CGPA">
	</div>
	</div><br><br>

	<div class="form-group">
	<label for="username" class="col-sm-2">Eligibility:</label>
	<div class="col-sm-10">
	<input type="text" id="eg" name="eg" class="form-control" placeholder="Eligibility for selection">
	</div>
	</div><br><br>

	<div class="form-group">
	<label for="username" class="col-sm-2">Position:</label>
	<div class="col-sm-10">
	<input type="text" id="pos" name="pos" class="form-control" placeholder="Position ">
	</div>
	</div><br><br>

	<div class="form-group">
	<label for="username" class="col-sm-2">CTC:</label>
	<div class="col-sm-10">
	<input type="text" id="ctc" name="ctc" class="form-control" placeholder="Enter CTC being provided you">
	</div>
	</div><br><br>

	<div class="form-group">
	<label for="username" class="col-sm-2">Description:</label>
	<div class="col-sm-10">
	<input type="text" id="des" name="des" class="form-control" placeholder="Description">
	</div>
	</div><br><br>
	<div class="col-sm-10">
	<input type="Submit" value="Submit" >
	</div>
	</form>
	</center>
	</p>
		<br>
		<br>
		<br>

	</div>	<!-- /container -->

</main>

<footer id="footer">
	<div class="container">
		<div class="row">

			<div class="col-md-3 widget">
				
				<div class="widget-body">
					<a href="http://www.jiit.ac.in/"><img src="logo1.jpg"></a>
				</div>
			</div>

			<div class="col-md-3 widget">
				<h3 class="widget-title">For further details Contact :</h3>
				<div class="widget-body">
					<p>
					<b>Commodore Kamal K Rohatgi, VSM (Retd)- Head Training & Placement And Dean Students Affair:<b><br>
					Office: (+91)-120-2400972-975, Extn 160<br>
					Direct: (+91)-120-2404103, 2594160<br>
					Fax: (+91)-120-2400986<br>
					Email: <a href="mailto:kk.rohatgi@jiit.ac.in">kk.rohatgi@jiit.ac.in</a>, <a href="mailto:kkr_r@yahoo.com">kkr_r@yahoo.com</a><br>
					</p>
				</div>
			</div>



			<div class="col-md-3 widget">
				<h3></h3><h3></h3>
				<div class="widget-body">
					<p>
					<b>Mr. Anurag Srivastava, Sr.Officer-Training & Placement:</b><br>
					Office: (+91)-120-2400972-976, Extn 162<br>
					Direct: (+91)-120-2594162<br>
					Fax: (+91)-120-2400986<br>
					Email:<a href="mailto:anurag.srivastava@jiit.ac.in"> anurag.srivastava@jiit.ac.in</a><br>
					</p>
				</div>
			</div>

			

			<div class="col-md-3 widget">
				<h3></h3><h3></h3>
				<div class="widget-body">
					<p>
					<b>Mrs Anita Marwaha, Sr.Officer-Training & Placement:</b><br>
					Office: (+91)-120-2400972-976, Extn 161<br>
					Direct: (+91)-120-2404102, 2594161<br><br>
					Fax: (+91)-120-2400986<br>
					Email:<a href="mailto:anita.marwaha@jiit.ac.in"> anita.marwaha@jiit.ac.in</a><br>
					</p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>

<footer id="underfooter">
	<div class="container">
		<div class="row">
			
			

			<div class="col-md-6 widget">
				<div class="widget-body">
					<p class="text-right">
						@ 2015 www.jiittnp.ac.in All Rights Reserved | Powered by <a href="http://innovatrix.co.in/" >Innovatrix </a></p>
				</div>
			</div>

		</div> <!-- /row of widgets -->
	</div>
</footer>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
</body>
</html>
