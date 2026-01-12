<?php
	$arr = [1,2,3,4,5,6];
	$even=0;
	$odd=0;
	foreach($arr as $val) { 
		if($val % 2 == 0)
			$even++;
		else
			$odd++;
	}
	echo "$even","<br>";
	echo "$odd";
?>