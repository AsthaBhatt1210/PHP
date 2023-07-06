<?php

   $username = $_POST["name"];
   setcookie("name",$username,time()+(86400));
   
   if(isset($_COOKIE["name"]))
   {
	   echo "Welcome " .$_COOKIE["name"];
   }
   else
   {
	   echo "Cookie is not set..";
   }
?>