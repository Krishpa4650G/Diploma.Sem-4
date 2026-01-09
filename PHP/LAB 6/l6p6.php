<?php
	$n=2;
	$flag=0;
	for ($i=1; $i <= $n ; $i++) 
    { 
       if($n % $i == 0)
       		$flag++;
    }
    if($flag>2)
    	echo"Non-Prime";
    else
    	echo"Prime";
?>