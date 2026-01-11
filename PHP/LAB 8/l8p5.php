<?php
$student = ["abc"=>85,"xyz"=>78,"ghi"=>92,"pqr"=>67,"def"=>90];
echo count($student);

$arr_keys = array_keys($student);
print_r($arr_keys);
$arr_values = array_values($student);
print_r($arr_values);

echo array_sum($student),"<br>";
echo array_product($student),"<br>";

echo min($student),"<br>";
echo max($student),"<br>";

echo in_array(90, $student),"<br>";
$index = array_search(92, $student);
echo $student[$index]; 
?>