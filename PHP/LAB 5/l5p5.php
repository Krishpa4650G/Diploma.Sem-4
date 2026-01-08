<?php
    $year = 2000;
    if($year %4 == 0 && $year %100== 0)
    {
        if($year %400== 0)
        {
            echo"leap year";
        }
        else 
        {
            echo "not a leap year";
        }
    }
     else if($year %4 == 0 && $year %100!= 0)
     {
        echo "leap year";
     }
?>