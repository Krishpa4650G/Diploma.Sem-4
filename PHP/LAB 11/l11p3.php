<?php
    function isPrime($a)
    {
        $flag=0;
        for($i=1; $i <= $a ; $i++) { 
            if ($a % $i == 0){
                $flag++;
            }
        }
        if($flag==2) {
            return 1;
        }
        else{
            return 0;
        }
    }
    echo isPrime(5);
    
?>