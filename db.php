
        <?php
        $servername="localhost";
       $username="root";
       $password="root";
       $conn=mysqli_connect($servername,$username,$password);
       if(!$conn)
       {
           die("error");
       }
       $db=mysqli_select_db($conn,"website");
      
       if(!$db)
       {
           
           echo "not connected";
       }
      
        ?>
