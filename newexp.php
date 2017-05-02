<?php
include 'db.php';
$usr=$_POST["usr"];
$sel1=$_POST["sel1"];
$comment=$_POST["comment"];

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
		 echo "<script type='text/javascript'> document.location = 'exper.php'; </script>";

}
else
{
  echo "error";
}	

?>