<?php
 $arr = array('Maruti','Ford','Hundai');
 
 //count function
 echo 'Count -- no of elements in array: ' .count($arr). '<br>';
 
 //list function
 list($a,$b,$c) = $arr;
 echo 'list -- Elements of array: '  .$a. ',' .$b. ',' .$c. '<br>';
 
 //in_array function
 echo 'in_array(): ' .in_array('Ford',$arr). '<br>';
 echo 'in_array(): ' .in_array('Toyata',$arr). '<br>';
 
 //array function
 echo 'array(): <br>';
 print_r($arr);
 echo '<br>';
 
 //current 
 echo 'current(): ' .current($arr). '<br>';
 
 //prev
 echo 'prev(): ';
 next($arr);
 next($arr);
 echo prev($arr). '<br>';
 
 //next
 echo 'next(): ' .next($arr). '<br>';
 
 //end
 echo 'end(): ' .end($arr). '<br>';
 
 //array_reverse
 echo 'After array_reverse: ';
 print_r(array_reverse($arr));
 echo '<br>';
 
 //merge()
 $a1 = array('PHP','Android');
 $a2 = array('WNS','Ajava');
 $a3 = array_merge($a1,$a2);
 print_r($a3);
 echo '<br>';
 
 //search()
 echo 'search(): ' .array_search('WNS',$a3). '<br>';
 
 //sort
 echo 'sort(): '; 
 sort($a3);
 print_r($a3);
 echo '<br>';
 
 //explode
 $str = 'I am going paris';
 echo '$str of explode: ' .$str. '<br>';
 $a = explode(' ',$str);
 print_r($a);
 echo '<br>';
 
 //implode
 echo 'implode(): ';
 print_r($a);
 echo '<br>';
 $str = implode('?',$a);
 echo $str;
?>