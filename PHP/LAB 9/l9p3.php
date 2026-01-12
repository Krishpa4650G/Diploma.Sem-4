<?php
	$arr = [1,2,3,4,5,6];
	$sum=0;
	foreach($arr as $val) { 
		if($val % 3 == 0 || $val % 5 == 0)
		{
			$sum = $sum + $val;
		}
	}
	echo "$sum";
?>