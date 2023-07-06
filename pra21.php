<?php
//Write a PHP script to connect MySQL server from your website.
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