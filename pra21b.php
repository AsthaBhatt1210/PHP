<?php
 //create table
 $con = mysqli_connect('localhost','root',''); 
 mysqli_select_db($con,'pra21');
 if(!$con)
 {
   die("Connection failed".mysqli_error());
 }
 else
 {
	$q = "CREATE TABLE Customer(cust_no int(10),cust_name varchar(20),Item_purchase int(50),mob_no int(10))";
    if(mysqli_query($con,$q))
       echo "Table create success";
    else
       echo "Table not created";
    mysqli_close($con);   
 }
 ?>
 
 