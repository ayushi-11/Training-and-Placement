<?php
include 'db.php';
$usr=$_POST['usr'];
$sel1=$_POST['sel1'];
$comment=$_POST['comment'];


/*$sql="INSERT INTO chk (pname,company) VALUES ('$usr','$sel1')";
$a=mysqli_query($conn,$sql);
$sql1="SELECT * FROM chk;";
$sql2=mysqli_query($conn,$sql1);
$sql3=mysqli_num_rows($sql2);
if($sql3>0)
{
	$txt="$sql3.txt";
	$b="INSERT INTO fil (fname,pname) VALUES ('$txt','$usr');";
	$c=mysqli_query($conn,$b);
	if(!$c)
	{
		echo "not done";
	}
	$fp=fopen($txt,'w+');
	if(isset($_POST['usr']) && isset($_POST['comment']))
	{
		
		$u=$_POST['comment'];
		file_put_contents($txt,$u."\n",FILE_APPEND);
		exit();
	}
	fwrite($fp,$u);
		fclose($fp);

*/
$a="SELECT * FROM fil;";
$b=mysqli_query($conn,$a);
$c=mysqli_num_rows($b);
if($c>0)
{
    $d=$c+1;
    $txt="$d.txt";
     $f="INSERT INTO fil(fname) VALUES('$txt');";
    $g=mysqli_query($conn,$f);
    if(!$g)
    {
      echo "Error 1";
    }
    
  	$fp=fopen($txt,'w+');
	if(isset($_POST['usr']) && isset($_POST['comment']) && isset($_POST['sel1']))
	{
		
		$u=$_POST['comment'];
		file_put_contents($txt,$u."\n",FILE_APPEND);
	
	}
	fwrite($fp,$u);
		fclose($fp);

		echo $d;
		echo $usr;
		$w="INSERT INTO euser(fno,enroll) VALUES ($d,$usr);";
		$r=mysqli_query($conn,$w);
		if(!$r)
		{
			echo "error 2";
		}

		$t="SELECT cid FROM comp WHERE cname='$sel1';";
		$y=mysqli_query($conn,$t);
		
		if($y)
		{

			echo "inside";
			$row=mysqli_fetch_row($y);
			$cid=$row[0];
		}
		else
		{
			echo "error";
		}
		$aa="INSERT INTO cexp (cid,fno) VALUES ($cid ,$d);";
		$bb=mysqli_query($conn,$aa);
		if(!$bb)
		{
			echo "error 4";
		}

}
else
{
  echo "error";
}		
		
	

?>

