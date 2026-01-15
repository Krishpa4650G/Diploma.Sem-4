<?php
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

// Fixed value
$n = 5;

echo "Factorial of $n is: " . factorial($n);
?>
