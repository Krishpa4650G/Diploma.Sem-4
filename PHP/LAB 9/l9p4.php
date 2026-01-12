<?php
	$arr = [1,2,3,4,5,6];
	$search = 5;
	$flag=0;
	foreach ($arr as $val) {
		if($search == $val)
			$flag++;
	}
	if ($flag>0)
		echo "FOUND!!!";
	else
		echo "NOT FOUND!!!";
?>