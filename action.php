
        <?php
        include 'db.php';
        $cname=$_POST["cname"];
        $sub=$_POST["sub"];
        $dod=$_POST["dod"];
        $cgpa=$_POST["cgpa"];
        $eg=$_POST["eg"];
        $pos=$_POST["pos"];
        $ctc=$_POST["ctc"];
        $des=$_POST["des"];

        $sql="INSERT INTO company_intro (company_name,subjct,date_of_drive,cgpa,eligibility,position ,ctc,description) VALUES ('$cname','$sub','$dod',$cgpa,'$eg','$pos',$ctc,'$des');";
        $n=mysqli_query($conn,$sql);

        if($n)
        {
        echo "<script type='text/javascript'> document.location = 'posted.php'; </script>";

        }
        else
        {
        echo "Error";
        }

        ?>
        