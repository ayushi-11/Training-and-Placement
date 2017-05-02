<?php
include('ganon.php');


$url="http://internshala.com/internships/internship-in-delhi%20ncr";


$html = file_get_dom($url);
foreach ($html('div.container-fluid individual_internship') as $element)
{
        echo $element->getInnerText();
    }
?>

