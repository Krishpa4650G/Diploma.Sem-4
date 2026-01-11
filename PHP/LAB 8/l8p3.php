<?php
$arr = [ [1,2,3],[3,2,1]];
	for ($i=0; $i < count($arr) ; $i++) { 
		for ($j=0; $j < count($arr[$i]); $j++) { 
		echo $arr[$i][$j];
	}
	echo "<br>";

}
?>