<?php
	$n=5;
	for ($i=1; $i <= $n ; $i++) 
    { 
        $ans=$ans+$i;
    }
    echo "$ans<br>";
    for ($i=1; $i <= $n ; $i++) 
    { 
        $ans=$ans*$i;
    }
    echo "$ans";
?>