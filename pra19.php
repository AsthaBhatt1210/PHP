<?php
 session_start();
 if(isset($_SESSION['visitcnt']))
 {
	 $_SESSION['visitcnt']  += 1;
 }
 else
 {
	 $_SESSION['visitcnt'] = 1;
 }
 $msg = 'Page seen: ' .$_SESSION['visitcnt'];
?>
 
 <html>
  <head>
    <title>PHP Session Count</title>
  </head>
  
  <body>
     <?php 
	    echo ($msg); 
	 ?>
  </body>
 </html>
 
 
