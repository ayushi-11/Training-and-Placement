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

            $username=$_POST["username1"];
            $pass=$_POST["passw1"];

            if ($username=="admin" || $pass=="adam123")
            {
            	  echo "<script type='text/javascript'> document.location = 'indexa.php'; </script>";

            }
            else
            {
                echo "Please enter correct details.";
            }
            ?>
            </body>
            </html>