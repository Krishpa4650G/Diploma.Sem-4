<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post" action="">
        <label>Username</label>
        <input type="text" name="uusername" required>
        <br>
        <label>Email</label>
        <input type="email" name="email" required>
        <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
if (isset($_POST['login'])) 
{
    $_SESSION['username'] = $_POST['uusername'];
    $_SESSION['email'] = $_POST['email'];
    if ($_SESSION['username'] === 'Krish' && $_SESSION['email'] === 'Krish@gmail.com') 
    header("location:l19p2.php");
}
?>