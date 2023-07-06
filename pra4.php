<?php
 $AAD=80;
 $PHP=90;
 $WNS=95;
 $AJP=79;
 echo'Mark in each subject: <br/>';
 echo'AAD: ' .$AAD. '<br/>';
 echo'PHP: ' .$PHP. '<br/>';
 echo'WNS: ' .$WNS. '<br/>';
 echo'AJP: ' .$AJP. '<br/><br/>';
 
 $sum = $AAD+$PHP+$WNS+$AJP;
 echo 'Total marks: ' .$sum.'/400 <br/><br/>';
 
 $per = ($sum*100)/400;
 echo 'Percentage: ' .$per. '<br/><br/>';
 
 if($per > 90)
	 echo 'AA';
 else if($per > 75)
	 echo 'BB';
 else if($per > 65)
	 echo 'CC';
 else if($per > 45)
	 echo 'DD';
 else
	 echo 'EE';
?>