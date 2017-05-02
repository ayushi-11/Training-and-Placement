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
<div class="container">
	<p>
	You can fill this form to share your experience with us.
	</p>
		 <form class="form-horizontal" method="POST" action="chck2.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="usr">Name :</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="usr" placeholder="Enter your name" name="usr">
    </div>
  </div>
 <div class="form-group">
  <label for="sel1" class="control-label col-sm-2">Company:</label>
  <div class="col-sm-10">
  <select class="form-control" id="sel1" name="sel1">
  <option>Select </option>
    <option>Amazon</option>
    <option>Cognizent</option>
    <option>Deloitte</option>
    <option>EY</option>
    <option>Hashedin Technologies</option>
    <option>SAP Labs</option>
    <option>Infosys</option>
    <option>Kuliza</option>
    <option>Paytm</option>
    <option>Wipro</option> 
    </select>
  </div>
</div>
  <div class="form-group">
  <label class="control-label col-sm-2" for="comment">Comment :</label>
  <div class="col-sm-10">
  <textarea class="form-control" rows="5" id="comment" placeholder="Share your experience" name="comment"></textarea>
  </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value="POST" id="submit" onclick="showCustomer(this.value)">
    </div>
  </div>
</form>
<script>
function showCustomer(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "chck2.php"+"Form successfully submitted", true);
  xhttp.send();
}
</script>
</div>

</body>
</html>
