<?php
    try
    {
	 $a = 10;
	 $b = 0;
	 
	 if($b==0)
		{
			throw new Exception ("Divide by zero");
		}
		else
		{
			$no = $a/$b;
			echo $no;
		}
	}
	
	catch(Exception $ex)
	{
		echo $ex->getmessage();
	}

?>