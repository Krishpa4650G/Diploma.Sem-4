<?php 
            $n1 = 10;
            $n2 = 20;
            $op = 1;
               switch($op){
                case 1: 
                    $ans=$n1+$n2;
                    break;
                case 2: 
                    $ans=$n1-$n2;
                    break;
                case 3: 
                    $ans=$n1/$n2;
                    break;
                case 5: 
                    $ans=$n1*$n2;
                    break;
                default:
                    echo "Enter valid operator.";
               }
            echo "The answer is ",$ans;
            
?>