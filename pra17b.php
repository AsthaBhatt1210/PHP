<?php
  session_start();
  if(isset($_POST['submit']))
  {
	  $a = $_POST['name'];
	  $_SESSION['a'] = $a;
	  
	  $b = $_POST['pword'];
	  $_SESSION['b'] = $b;
	  
	  echo 'Name: ' .$_SESSION['a']. '<br>';
	  echo 'Password: ' .$_SESSION['b'];
  }
?>