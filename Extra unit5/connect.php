<?php
 //connection  
 $con = mysqli_connect('localhost','root',''); //servername, username, password
 if(!$con)
 {
   die("Connection failed".mysqli_error());
 }
 else
 {
   echo 'MYSQL connection successfull';
 }
?>