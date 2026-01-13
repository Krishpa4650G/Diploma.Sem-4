<?php
	function f()
	{
		$n=5;
	$x = 0;
	$y = 1;
	$z;
	for ($i=1; $i <= $n ; $i++) 
    {
    	echo "$x<br>";
    	$z=$x+$y;
    	$x=$y;
    	$y=$z; 
    }
	}
	f();
?>