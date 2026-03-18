<?php
    $conn = mysqli_connect("localhost","root","","KRISH");
    $qry = "select * from student";
    $result = mysqli_query($conn,$qry);

    print_r(mysqli_fetch_array($result));

?>