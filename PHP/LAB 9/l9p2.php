<?php
	$arr = [1,2,3,4,5,6];
	$sum=0;
	foreach($arr as $val) { 
		$sum = $sum + $val;
	}
	$ans=$sum/count($arr);
	echo "$ans";
?>