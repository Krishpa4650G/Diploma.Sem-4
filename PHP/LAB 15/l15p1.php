<?php

	$str = "php is powerful scripting language";
	echo strlen($str)."<br>";
	echo strtolower($str)."<br>";
	echo strtoupper($str)."<br>";
	echo strpos($str, "powerful")."<br>";
	echo str_replace("powerful", "programming", $str)."<br>";
	echo substr($str, 0,3)."<br>";
	echo strrev($str)."<br>";
	echo trim($str)."<br>";
	echo str_repeat("php ",5)."<br>";
	$arr = array ('i','code' ,'str1' );
	echo implode(" ",$arr)."<br>";
	print_r(explode(" ", $str));
	echo "<br>"; 
	echo str_shuffle($str)."<br>";
	$str1 = "Hello \n Linux"."<br>";
	echo  nl2br($str1)."<br>";
?>