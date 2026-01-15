<?php
function sumOfNumbers($n) {
    if ($n <= 0) {
        return 0;
    }
    return $n + sumOfNumbers($n - 1);
}

// Fixed value of n
$n = 10;

echo "Sum of first $n numbers is: " . sumOfNumbers($n);
?>
