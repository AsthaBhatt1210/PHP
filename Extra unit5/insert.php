<?php
 //insert value in table
 $con = mysqli_connect('localhost','root',''); 
 mysqli_select_db($con,'dbtest');
 if(!$con)
 {
   die("Connection failed".mysqli_error());
 }
 else
 {
	$q = "INSERT INTO student value(1,'Astha')";
	$q = "INSERT INTO student value(2,'Diya')";
	$q = "INSERT INTO student value(3,'Twinkle')";
    if(mysqli_query($con,$q))
       echo "Record insert success";
    else
       echo "Record not inserted";
    mysqli_close($con); 
 }
?>