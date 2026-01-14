<?php
	function Circle()
	{
		$r=10;
		echo 3.14*$r*$r,"<br>";
	}
	function Rectangle()
	{
		$l=10;
		$b=20;
		echo $l*$b,"<br>";
	}
	function Square()
	{
		$a=10;
		echo $a*$a;
	}
	Circle();
	Rectangle();
	Square();
?>