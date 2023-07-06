<?php
 //create db 
 $con = mysqli_connect('localhost','root',''); 
 if(!$con)
 {
   die("Connection failed".mysqli_error());
 }
 else
 {
	 $q = "CREATE DATABASE pra21";
	// $q = "DROP DATABASE dbtest1";
	 $res = mysqli_query($con,$q);
	 if(!$res)
		 echo "Database is not created";
	 else
		 echo "Database created";
	 mysqli_close($con);
 }
?>