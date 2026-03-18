<?php
		if(isset($_COOKIE['vc']))
		{
			$vc = $_COOKIE['vc'] + 1;
		}
		else{
			$vc = 1;
		}
		setcookie("vc",$vc,time()+3600);
		echo $vc;	
?>