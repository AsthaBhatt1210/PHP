<?php
 //select table
 $con = mysqli_connect('localhost','root',''); 
 mysqli_select_db($con,'dbtest');
 if(!$con)
 {
  echo "Database is not available";
 }
 else
 {
   echo "Database is available";
 }
 ?>