<?php	
	if(isset($_POST['submit'])){

	 $name = $_POST['uname'];
	 echo $name,"<br>";

	 $num = $_POST['unumber'];
	 echo $num,"<br>";

	 $pwd = $_POST['upwd'];
	 echo $pwd,"<br>";

	 $sem = $_POST['usem'];
	 echo $sem,"<br>";

	 $gen = $_POST['ugen'];
	 echo $gen,"<br>";

	 foreach ($_POST['uhob'] as $val) {
	 	echo $val;
	 }

	}
	if(isset($_GET['submit'])){

	$name1 = $_GET['uname'];
	 echo $name1,"<br>";

	 $num1 = $_GET['unumber'];
	 echo $num1,"<br>";

	 $pwd1 = $_GET['upwd'];
	 echo $pwd1,"<br>";

	 $sem1 = $_GET['usem'];
	 echo $sem1,"<br>";

	 $gen1 = $_GET['ugen'];
	 echo $gen1,"<br>";

	 $hob1 = $_GET['uhob'];
	 echo $hob1,"<br>";
	}
	 
?>