<?php
	$arr = [6,4,5,3,2,1];
	$n=count($arr);
	for ($i=0; $i < $n-1 ; $i++) { 
		for ($j=0; $j < $n - $i -1; $j++) { 
			if ($arr[$j+1]>$arr[$j])
			{
				$temp = $arr[$j+1];
				$arr[$j+1] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
		print_r($arr);
?>