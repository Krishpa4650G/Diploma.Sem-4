<?php
	$scores = [85,78,92,67,90];
	print_r($scores);
	shuffle($scores);
	array_push($scores, 5);
	array_shift($scores);
	array_unshift($scores, 2);
?>