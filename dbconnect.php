<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>S NO </th><th>COMPANY NAME </th><th>SUBJECT</th><th>DATE OF DRIVE </th><th>CGPA</th><th>ELIGIBILITY </th><th>POSITION</th><th>CTC</th><th>DESCRIPTION</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$dsn = 'mysql:dbname=website;host=localhost';
$user = 'root';
$password = 'root';

try {
    $dbh = new PDO($dsn, $user, $password);
   /* if($dbh)
    {
    	echo "connect";
    }
    else
    {
    	echo "not connected";
    } */
    $stmt=$dbh->prepare("SELECT * FROM company_intro");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
