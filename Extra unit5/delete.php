<?php
 //delete value in table
 $con = mysqli_connect('localhost','root',''); 
 mysqli_select_db($con,'dbtest');
 if(!$con)
 {
   die("Connection failed".mysqli_error());
 }
 else
 {
	$q = "DELETE FROM student WHERE Rno=3";
    if(mysqli_query($con,$q))
       echo "Record delete success";
    else
       echo "Record not deleted";
    mysqli_close($con); 
 }
?>