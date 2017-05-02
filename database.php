<?php
include 'db.php';
$s="Amazon";
$sql="SELECT cid FROM comp WHERE cname='$s';";
$sql1=mysqli_query($conn,$sql);
if(!$sql1)
{
  echo "error";
}
else
{

  $row=mysqli_fetch_row($sql1);
  $cid=$row[0];
  echo $cid;
}
?>
