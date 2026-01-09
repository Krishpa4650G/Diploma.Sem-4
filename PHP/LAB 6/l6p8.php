<?php
	$n=153;
	$temp=$n;
	$ans;
	while($n>0){
		$ans+=pow($n%10, 3);
		$n=(int) ($n/10);

	}
	if($temp==$ans)
		echo "armstrong";
	else
		echo "not armstrong";
?>