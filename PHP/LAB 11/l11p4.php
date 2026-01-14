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
    seriesOfPrime(5,10);
    function seriesOfPrime($n1,$n2){
        for($i =$n1 ;$i<$n2;$i++){
            if(isPrime($i)){
               echo "$i","<br>"; 
            }
        
        }
    }
?>