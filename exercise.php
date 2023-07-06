<?php
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'dbtest');
	if(!$con)
     {
          die("Connection failed".mysqli_error());
     }
	 
	   $sql="SELECT * FROM Account";
	   $query = mysqli_query($con,$sql);
		
            echo "<table border='1'>
			<tr>
				<th>name</th>
				<th>account_no</th>
				<th>account_type</th>
				<th>branch_name</th>
				<th>city</th>
				<th>amount</th>
			</tr>";
	while($row = mysqli_fetch_array($query))
	{
	
		echo" <tr>
			<td>".$row['name']."</td>
			<td>".$row['account_no']."</td>
			<td>".$row['account_type']."</td>
			<td>".$row['branch_name']."</td>
			<td>".$row['city']."</td>
			<td>".$row['amount']."</td>
		</tr>";
	}
	echo "</table>";
?>
