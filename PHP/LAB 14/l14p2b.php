<?php	
	if(isset($_POST['submit'])){

	 $name = $_POST['uname'];
	 echo $name,"<br>";

	 $num = $_POST['unumber'];
	 echo $num,"<br>";

	 $pos = $_POST['uposition'];
	 echo $pos,"<br>";

	 $pwd = $_POST['upwd'];
	 echo $pwd;

	}
	if(isset($_GET['submit'])){

	$name1 = $_GET['uname'];
	 echo $name1,"<br>";

	 $num1 = $_GET['unumber'];
	 echo $num1,"<br>";

	 $pos1 = $_GET['uposition'];
	 echo $pos1,"<br>";

	 $pwd1 = $_GET['upwd'];
	 echo $pwd1;
	}
	 
?>