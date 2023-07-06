<?php
 //insert value in table
 $con = mysqli_connect('localhost','root',''); 
 mysqli_select_db($con,'pra21');
 if(!$con)
 {
   die("Connection failed".mysqli_error());
 }
 else
 {
	$q = "INSERT INTO Customer value(1,'Astha',5,76220200657)";
	$q = "INSERT INTO Customer value(2,'Diya',10,9099772640)";
	$q = "INSERT INTO Customer value(3,'Twinkle',17,7890657689)";
    if(mysqli_query($con,$q))
       echo "Record insert success";
    else
       echo "Record not inserted";
    mysqli_close($con); 
 }
?>

