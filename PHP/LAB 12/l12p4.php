<?php
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

// Fixed value of N
$n = 10;

echo "Fibonacci series: ";
for ($i = 0; $i < $n; $i++) {
    echo fibonacci($i) . " ";
}
?>
