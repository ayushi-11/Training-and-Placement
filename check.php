<?php
$ch=curl_init();
$url="http://internshala.com/internships/internship-in-delhi%20ncr";
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,5);
$curlresult=curl_exec($ch);
curl_close($ch);
$curlresult=str_replace("<","&lt;",$curlresult);
echo $curlresult ;
?>
