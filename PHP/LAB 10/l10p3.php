<?php
	function Add($a,$b)
	{
		return $a+$b."<br>";
	}
	function Sub($a,$b)
	{
		echo $a-$b."<br>";
	}
	function Div()
	{
		$a=10;
		$b=20;
		return $a/$b."<br>";
	}
	function Multi()
	{
		$a=10;
		$b=20;
		echo $a*$b."<br>";
	}
	$a=Add(10,20);
	echo "$a";
	Sub(10,20);
	$b=Div();
	echo "$b";
	Multi();
?>