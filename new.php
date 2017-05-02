<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>  </head>     
 <body>

        <?php
        include 'db.php';

 header("Access-Control-Allow-Origin: *");
        // $username=$pass=$dob="";
       
            $username=$_POST["username"];
            $pass=$_POST["passw"];
            $dob=$_POST["dob"];
            $yearr=$_POST['year'];
           
           
            $url='https://webkiosk.jiit.ac.in/CommonFiles/UserActionn.jsp?UserType=S&MemberCode='.$username.'&Password='.$pass.'&DATE1='.$dob.'&InstCode=JIIT';
      //  echo $username;
            $ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_URL,"https://webkiosk.jiit.ac.in/CommonFiles/UserActionn.jsp");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            'UserType=S&MemberCode='.$username.'&Password='.$pass.'&DATE1='.$dob.'&InstCode=JIIT');

// in real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);
//print_r($server_output);


        //       $ch = curl_init();  
  // $url="http://webkiosk.jiit.ac.in/CommonFiles/UserActionn.jsp?UserType=S&MemberCode=$username&Password=$pass&DATE1=$dob&InstCode=JIIT";

         

        
                
if(empty($server_output))
{
        session_start();
    $_SESSION['sid']=$username;
       echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
        $w="SELECT enroll FROM users where enroll=$username;";
            $r=mysqli_query($conn,$w);
            $t=mysqli_num_rows($r);
            if($t==0)
            {
           $s="INSERT INTO users (enroll,yearr,dob) VALUES ($username,$yearr,'$dob');";
          $sql2=mysqli_query($conn,$s);
           if(!$sql2)
           {
            echo "error!";
           }
       }
}
else
{
    echo "erorrr";
}
   
  
         
           ?> 


        </body>


</html>