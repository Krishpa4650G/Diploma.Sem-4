<?php
    $i=1;
    $n=5;
    while ($i <= $n) 
    {
        if ($i % 2 != 0)
            echo $i;  
         $i++;
    }
   for ($i=1; $i <= $n ; $i++) 
    { 
        if ($i % 2 != 0)
            echo $i;  
    }
    $i=1;
    do {
       if ($i % 2 != 0)
            echo $i;  
        $i++;
    } while ($i <= $n);

?>
