<html>
<head>
		 <title>Form Attributes</title>
</head>
<body>
		
		<form  method="get" id="a" enctype="multipart/form-data" autocomplete="on" 	target="_blank" novalidate>
		<label>Name</label> 
		<input type="text" name="uname" form="a" required> <br>

		<label>Email</label> 
		<input type="email" name="uemail" form="a" required> <br>

		 <label>Password</label>
		 <input type="password" name="upwd" required> <br>

		 <input type="submit" name="submit" value="Register">
	 	</form>
<?php	
	if(isset($_post['submit'])){
	 $name = $_POST['uname'];
	 echo $name,"<br>";
	 $email = $_POST['uemail'];
	 echo $email,"<br>";
	 $pwd = $_POST['upwd'];
	 echo $pwd;
	}
	if(isset($_get['submit'])){
	$name1 = $_GET['gname'];
	 echo $name1,"<br>";
	 $email1 = $_GET['gemail'];
	 echo $email1,"<br>";
	 $pwd1 = $_GET['gpwd'];
	 echo $pwd1;
	}
	 
?>

</body>
</html>