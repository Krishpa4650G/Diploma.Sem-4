<html>
<head>
		 <title>Form Attributes</title>
</head>
<body>
		
		<form  action="l14p3b.php" method="post" id="a" enctype="multipart/form-data" autocomplete="on" 	target="_blank" novalidate>
		<label>Name</label> 
		<input type="text" name="uname" form="a" required> <br>

		<label>Number</label> 
		<input type="number" name="unumber" form="a" required> <br>

		<label>Password</label>
		<input type="password" name="upwd" required> <br>
		 
		<label>Semester</label>
		<select name="usem">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>4</option>
			<option>6</option>
		</select> <br>

		<label>Gender</label>
		<input type="radio" name="ugen" value="Male" required>Male
		<input type="radio" name="ugen" value="Female"  required>Female <br>

		<label>Hobbies</label>
		<input type="checkbox" name="uhob[]" value="Drawing" required>Drawing
		<input type="checkbox" name="uhob[]" value="Dancing" required>Dancing <br>

		 <input type="submit" name="submit" value="Register">
	 	</form>

</body>
</html>