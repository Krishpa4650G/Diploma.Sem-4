<?php
    $n = 121;
    $temp = $a;
    $sum=0;
    while ($n>0) 
    {
        $rem = $n%10;
        $sum = $sum*10;

    }
    if ($sum==$temp) 
    {
        echo "palindrome";
    }
    else
    {
        echo "not palindrom";
    }
?>