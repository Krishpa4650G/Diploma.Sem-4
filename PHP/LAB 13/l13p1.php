<!DOCTYPE html>
<html>
<head></head>
<body>
<?php 
 	include '1.html';
?>
	<h1>Main Content</h1>
<?php 
	require '2.html';
?>

	<h1>Include Once and Require Once</h1>

<?php 
 	include_once '1.html';
?>
	<h1>Main Content</h1>
<?php 
	require_once '2.html';
?>
</body>
</html>