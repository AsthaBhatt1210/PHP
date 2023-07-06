<?php
 
 $int_no = 123;
 $float_no = 22.33;
 $bool = true;
 $null = NULL;
 $string = 'Astha Bhatt';

 $a[0] = "A";
 $a[1] = "B";
 $a[2] = "C"; 
 $a[3] = "D";
 
 echo 'int_no: ' .$int_no. '<br/>';
 echo 'float_no: ' .$float_no. '<br/>';
 echo 'bool: ' .$bool. '<br/>';
 echo 'null: ' .$null. '<br/>';
 echo 'string: ' .$string. '<br/><br/>';
 
 echo 'Index 0: ' .$a[0]. '<br/>';
 echo 'Index 1: ' .$a[1]. '<br/>';
 echo 'Index 2: ' .$a[2]. '<br/>';
 echo 'Index 3: ' .$a[3]. '<br/><br/>';
 
 echo 'Value of int_no is: ' .$int_no. '<br/>';
 echo 'The Type of int_no is:' .gettype($int_no). '<br/><br/>';
 
 echo 'Value of float_no is: ' .$float_no. '<br/>';
 echo 'The Type of float_no is:' .gettype($float_no). '<br/><br/>';
 
 settype($float_no,"integer");
 echo 'Value of float_no after settype is: ' .$float_no. '<br/><br/>';
 
 $x = 20;
 echo 'Check with isset() $x is exist: ' .isset($x). '<br/>';
 echo 'Before using unset() value of $x: ' .$x. '<br/>';
 unset($x);
 echo 'After using unset() the value of $x cant use <br/><br/>';

 $y = 06;
 if(empty($y))
 {
	 echo 'Variable y does not exist';
 }	 
 else
 {
	 echo 'Variable y exist<br/>';
 }
 if(empty($z))
 {
	 echo 'Variable z does not exist <br/><br/>';
 }
 else 
 {
	 echo 'Variable z exists';
 }
 
  echo 'Casting Data Type<br/>';
  
  $var = '12.345goodwork';
  echo '$var' .$var. '<br/>';
  
  $float_value = floatval($var);
  echo 'Float value: ' .$float_value. '<br/>';
  
  $str_value = strval($var);
  echo 'String value: ' .$str_value. '<br/>';
  
  $int_value = intval($var);
  echo 'Integer value: ' .$int_value. '<br/><br/>'; 
?>