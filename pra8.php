<?php
  function Factorial(int $n)
  {
	 $fact = 1;
	 for($i = 1; $i <= $n ; $i++)
	 {
		 $fact = $fact * $i;
	 }
	 echo 'Factorial of 5 using Function: ' .$fact;
  }
  Factorial(5);

?>