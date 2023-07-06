<?php
	if(isset($_POST['sub']))
	{
		$n = $_POST['uname'];
		$e = $_POST['email'];
		$p = $_POST['pass'];
		$d = $_POST['date'];
		$ph= $_POST['phone'];
		$g = $_POST['gender'];
		$s = $_POST['state'];
	   $agr= $_POST['agree'];
		
		echo "<b><i><h1>DETAILS</h1></i></b>";
		echo "<hr/>";
		echo "<b>Your name is : $n</b><br/> ";
		echo "<hr/>";
		echo "<b>Your DOB is : $d</b><br/> ";
		echo "<hr/>";
		echo "<b>Your email is : $e</b><br/> ";
		echo "<hr/>";
		echo "<b>Your password is : $p</b><br/> ";
		echo "<hr/>";
		echo "<b>Your Phone no. is : $ph</b><br/> ";
		echo "<hr/>";
		echo "<b>Your gender is : $g</b><br/> ";
		echo "<hr/>";
		echo "<b>Your State is : $s</b><br/> ";
		echo "<hr/>";
		echo "<b> Agree condition :$agr</b><br/> ";
		echo "<hr/>";
	}
?>