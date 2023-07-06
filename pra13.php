<?php
//fopen(): used to open a file
//fclose(): used to close a file
//fwrite(): write a data
//fread(): read a data 
 $filename = 'pra13.txt';
 
 //append operation
 $file = fopen($filename,'a+');
 
 if($file == false)
 {
	echo 'Error in opening file';
	exit();
 }
 fwrite($file,'Hello');
 echo 'Append is successfully done <br>';
 fclose($file);
 
 //read operation
 $file=fopen($filename,'r'); //read mode
 $size = filesize($filename);
 $text = fread($file,$size);
 fclose($file);
 echo 'File size: ' .$size. '<br>';
 echo 'File name: ' .$filename. '<br>';
 echo 'File text: ' .$text. '<br>';
?>