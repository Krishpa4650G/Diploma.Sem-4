<?php
function printNumbers($n) {
    if ($n <= 0) {
        return;
    }
    echo $n . " ";
    printNumbers($n - 1);
}

// Fixed value of N
$n = 10;

printNumbers($n);
?>
