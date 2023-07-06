<?php
/*Write a program to edit name of customer to “Bob” with cust_no =1, and to delete record with cust_no=3.*/

$con = mysqli_connect('localhost','root','');
if(!$con)
{
    die ('could not connect to server:'.mysqli_error());
}

//update  data
	$sql = "UPDATE customer_table SET CUST_NAME='Bob' WHERE CUST_NO=1";
	mysqli_select_db($con,'php practical');
	$retval= mysqli_query($con,$sql);
	if(!$retval)
	{
		die('could not update data : '. mysqli_error());
	}
	echo  "Row is updated successfully <br/>";
	
	
//delete data 

	$sql = "DELETE FROM customer_table WHERE CUST_NO=3";
	mysqli_select_db($con,'php practical');
	$retval= mysqli_query($con,$sql);
	if(!$retval)
	{
		die('could not delete data : '. mysqli_error());
	}
	echo  "Row is deleted successfully";
	mysqli_close($con);
?>