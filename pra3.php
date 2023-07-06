<?php
 $a=0;
 $b=1;
 $no=0;
 echo 'Fibonacci series of 10 no<br/>';
 while($no < 10)
 {
   $c = $b + $a;
   echo $c.' ';
   $a = $b;
   $b = $c;
   $no++;
 }
?>