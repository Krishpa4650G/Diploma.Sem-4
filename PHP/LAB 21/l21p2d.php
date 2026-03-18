<?php
    $conn = mysqli_connect("localhost","root","","KRISH");
    if ($conn) {
        if (isset($_POST['login'])) {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $num = $_POST['number'];

        $qry = "INSERT INTO `student`( `Name`, `Email`, `Age`, `Number`) VALUES ('$name','$email',$age,$num)";
        $result = mysqli_query($conn,$qry);
            if ($result) {
                header("Location:l21p2s.php");
                }   
    }
    }
?>