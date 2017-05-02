<?php

$sql=13;
$txt="$sql.txt";

	$fp=fopen($txt,'w+');
	$n="fgidshflsdjfklsdlkfsd";
	file_put_contents('$sql.txt',$n."\n",FILE_APPEND);
	fwrite($fp,$n);
?>
