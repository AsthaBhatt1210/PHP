<?php
 $a = 5;
 $b = 10;
 $c = 15;
 
 if($a>$b and $a>$c)
  echo 'A is max';
 
 else if($b>$c and $b>$a)
  echo 'B is max';
  
 else if($c>$a and $c>$b)
  echo 'C is max';
 else
  echo 'All are same';
?>