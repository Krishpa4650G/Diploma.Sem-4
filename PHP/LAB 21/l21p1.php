<?php
	$conn=mysqli_connect("localhost","root","");
	if($conn){
		echo "Connection successfully";

		$qry="create database Dhruv_158";
		// $result=;

		if(mysqli_query($conn,$qry)) {
			echo "Create successfully";
		}
		else{
			echo mysql_error($conn);
		}

	}
	else{
		echo "Connection not successfully";
	}
?>