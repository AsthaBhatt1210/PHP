<!DOCTYPE html>
<head>
</head>
	<body bgcolor="grey">
<?php
	if(isset($_POST['sub']))
	{
		$n= $_POST['uname'];
		$e =$_POST['email'];
		$p =$_POST['pass'];
		$ph =$_POST['phone'];
		$a =$_POST['add'];
		$g =$_POST['gender'];
		echo "<b><i><h1>ENTERED DETAILS</h1></i></b>";
		echo "<hr/>";
		echo "<hr/>";
		echo "<b>Your Name is : $n</b><br/> ";
		echo "<hr/>";
		echo "<b>Your Email is : $e</b><br/> ";
		echo "<hr/>";
		echo "<b>Your Password is : $p</b><br/> ";
		echo "<hr/>";
		echo "<b>Your Phone no. is : $ph</b><br/> ";
		echo "<hr/>";
		echo "<b>Your Address is : $a</b><br/> ";
		echo "<hr/>";
		echo "<b>Your Gender is : $g</b><br/> ";
		echo "<hr/>";		
	}
?>
</body>
</html>