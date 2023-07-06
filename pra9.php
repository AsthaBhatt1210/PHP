<?php

  echo 'chr(444): ' .chr(444). '<br>';
  echo 'chr(333): ' .chr(333). '<br>';
  echo 'chr(73): ' .chr(73). '<br>';
  echo 'ord(\'A\'): ' .ord('A'). '<br>';
  echo 'ord(\'s\'): ' .ord('s'). '<br><br>';
  
  $s = 'Astha';
  echo '$s: ' .$s. '<br>';
  
  $s = strtolower($s);
  echo 'After to lower(): ' .$s. '<br>';
  
  $s = strtoupper($s);
  echo 'After to upper(): ' .$s. '<br><br>';
  
  $a ="     Hello whatsup everyone      ";
  
  echo '$a = ' .$a. '<br>';
  echo 'Length: ' .strlen($a). '<br>';
  
  echo "<b>ltrim: It removes whitespace from the left side of string</b><br/>";
  $b = ltrim($a);
  echo "Value of \$b= $b and length=".strlen($b)."<br>";
  
  echo "<b>rtrim: It removes whitespace from the right side of string</b><br/>";
  $c = rtrim($a);
  echo "Value of \$c= $c and length=".strlen($c)."<br>";
  
  echo "<b>trim: It removes whitespace from the both side of string</b><br/>";
  $d = trim($a);
  echo "Value of \$d= $d and length=".strlen($d)."<br><br>";
  
  $t = 'Good Morning';
  echo '$t = ' .$t. '<br>';
  echo 'substr($t,5): ' .substr($t,5). '<br>';
  echo 'substr($t,2,5): ' .substr($t,2,5). '<br>';
  echo 'substr($t,0,1): ' .substr($t,0,1). '<br><br>';
  
  echo 'strcmp(): ' .strcmp('India','INDIA'). '<br>';
  echo 'strcasecmp(): ' .strcasecmp('India','INDIA'). '<br><br>';
  
  echo 'strpos(): ' .strpos('Astha Bhatt','t'). '<br>';
  echo 'strpos(): ' .strpos('Astha Bhatt','a',4). '<br><br>';

  echo 'strstr(): ' .strstr('Astha Bhatt','BHATT'). '<br>';
  echo 'strstr(): ' .strstr('Astha Bhatt','Bhatt'). '<br><br>';

  echo str_replace('A','D','AASTHA <br>');
  
  echo 'strrev() of $t: ' .strrev($t). '<br>';

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
?>