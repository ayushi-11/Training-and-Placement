<?php

include 'db.php';

$enrol=$_POST['enrol'];
$pswd=$_POST['pswd'];
$email=$_POST['email'];

$sql="INSERT INTO requests (Enrollment,Passwordd,Email) VALUES ($enrol,'$pswd','$email');";
$n=mysqli_query($conn,$sql);
if($n)
{
	echo "<script type='text/javascript'> document.location = 'coord1.php'; </script>";
}
else
{
	echo "error";
}

?>