<?php
    $a1 = array
	(
	  array(1,2),
	  array(3,4),
	);
	
	$a2 = array
	(
	  array(5,6),
	  array(7,8),
	);
	
	echo '<h3>Array1</h3>';
	for($r=0; $r<2; $r++)
	{
		for($c=0; $c<2; $c++)
		{
			echo $a1[$r][$c].'&nbsp;&nbsp;';
		}
		echo'<br>';
	}
	
	echo '<h3>Array2</h3>';
	for($r=0; $r<2; $r++)
	{
		for($c=0; $c<2; $c++)
		{
			echo $a2[$r][$c].'&nbsp;&nbsp;';
		}
		echo'<br>';
	}
	
	echo '<h3>Additation</h3>';
	for($r=0; $r<2; $r++)
	{
		for($c=0; $c<2; $c++)
		{
			echo ($a1[$r][$c] + $a2[$r][$c]).'&nbsp;&nbsp;';
		}
		echo'<br>';
	}
?>