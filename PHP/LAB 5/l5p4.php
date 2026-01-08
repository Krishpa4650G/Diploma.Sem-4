<?php 
      $m1=50;
      $m2=70;
      $m3=60;
      $m4=50;
      $m5=40;
      $percentage=(($m1+$m2+$m3+$m4+$m5)/5);
      echo "You got $percentage%.<br>";
      if($percentage>=70){
          echo "Distinction";
      }
      else if($percentage>=60 && $percentage<70){
          echo "First Class";
      }
      else if($percentage>=50 && $percentage<60){
          echo "Second Class";
      }
      else if($percentage>=40 && $percentage<50){
          echo "Pass Class";
      }
      else {
          echo "Fail";
      }
?>