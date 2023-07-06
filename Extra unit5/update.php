<?php
 //update value in table
 $con = mysqli_connect('localhost','root',''); 
 mysqli_select_db($con,'dbtest');
 if(!$con)
 {
   die("Connection failed".mysqli_error());
 }
 else
 {
	$q = "UPDATE student SET Name='Jiya' WHERE Rno=3a";
    if(mysqli_query($con,$q))
       echo "Record update success";
    else
       echo "Record not updated";
    mysqli_close($con); 
 }
?>