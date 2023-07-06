<?php
	echo 'Date <br>';
	echo 'Date: ' .date('Y/m/d'). '<br>';
	
	echo 'getdate() <br>';
	echo 'getDate=' ;
	print_r(getdate());
	
	echo 'setdate() <br>';
	$today= new DateTime;
	echo $today->format('d-m-y');
	echo '<br/>';
	$today ->setDate (21,01,07);
	echo $today->format('d-m-y');
	
	echo 'checkdate() <br>';
	echo 'valid Date Checkdate(7,01,2021): ' .checkdate(7,1,2021). '<br>';
	echo 'valid Date Checkdate(2,32,2000): ' .checkdate(2,32,2000). '<br>';
	
	echo 'time() <br>';
	echo 'currenttime=';
	$current=time();
	echo (date('h:i:s',$current));
	
	echo 'mktime() <br>';
	echo 'mktime(0,0,0,1,7,2021) =' .mktime(0,0,0,1,7,2021). '<br>';
?>