<?php
 echo 'abs() <br>';
 $a = abs(-100);
 $b = abs(100);
 echo $a. '<br>';
 echo $b. '<br><br>';
 
 echo 'ceil() <br>';
 $c = ceil(2.23);
 $d = ceil(-2.23);
 echo $c. '<br>';
 echo $d. '<br><br>';
 
 echo 'floor() <br>';
 $e = floor(4.55);
 $f = floor(-4.55);
 echo $e. '<br>';
 echo $f. '<br><br>';
 
 echo 'round() <br>';
 $g = round(2.99);
 $h = round(2.12);
 echo $g. '<br>';
 echo $h. '<br><br>';
 
 echo 'fmod() <br>';
 $i = fmod(10,2);
 echo $i. '<br><br>';
 
 echo 'min() <br>';
 echo min(34,99). '<br>';
 
 echo 'max() <br>';
 echo max(34,99). '<br>';

 echo 'pow() <br>';
 echo pow(5,2). '<br>';

 echo 'sqrt() <br>';
 echo sqrt(25). '<br>';

 echo 'rand() <br>';
 echo rand(). '<br>';
 echo rand(1,200). '<br>';
 echo rand(200,5000). '<br>'; 
?>