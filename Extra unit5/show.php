<?php
 //show value in table
 $con = mysqli_connect('localhost','root',''); 
 mysqli_select_db($con,'dbtest');
 if(!$con)
 {
   die("Connection failed".mysqli_error());
 }
 else
 {
	$q = "SELECT * FROM student";
	$res = mysqli_query($con,$q);
	
    if(mysqli_num_rows($res)>0)
	{
	   while($row = mysqli_fetch_array($res))
	   {
          echo $row['Rno']. "   " .$row['Name']. "<br>";
	   }
	}
    else
       echo "Record show not inserted";
    mysqli_close($con); 
 }
?>