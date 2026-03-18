<html>
<head>
		 <title>Form Attributes</title>
</head>
<body>
		
		<form  method="post" id="a" enctype="multipart/form-data" autocomplete="on" 	target="_blank" novalidate>
		<label>Name</label> 
		<input type="text" name="uname" form="a" required> <br>

		<label>Email</label> 
		<input type="text" name="uemail" form="a" required> <br>

		<label>Number</label> 
		<input type="text" name="unum" form="a" required> <br>

		 <input type="submit" name="submit" value="Register">
	 	</form>
<?php	
	if(isset($_POST['submit'])){
	 $name = $_POST['uname'];
	 $email = $_POST['uemail'];
	 $number = $_POST['unum'];
	}
	if(!preg_match("/^[a-zA-Z]+$/",$name))
		$err[]="Name";

	if (!preg_match("/^[0-9]{10}$/",$number)) 
		$err[]="Number";

	if (!preg_match("/^[a-zA-Z0-9]+@[a-z.]+\.[a-z]{2,}+$/",$email))
		$err[]="Mail";

	if (!empty($err)) {
		foreach ($err as $value) {
			echo("Error ".$value."<br>");
		}
	}
	
?>

</body>
</html>
