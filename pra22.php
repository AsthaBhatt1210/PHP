<?php
/*Write a program to read customer information like cust_no,cust_name, Item_purchase, and mob_no, from customer table and display all these information in table format on output screen.*/
    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'php practical');
	if(!$con)
     {
          die("Connection failed".mysqli_error());
     }
	 
	   $sql="SELECT * FROM customer_table";
	   $query = mysqli_query($con,$sql);
		
            echo "<table border='1'>
			<tr>
				<th>cust_no </th>
				<th>cust_name</th>
				<th>Item_purchase</th>
				<th>mob_no</th>
			</tr>";
	
	while($row = mysqli_fetch_array($query))
	{
	
		echo" <tr>
			<td>".$row['CUST_NO']."</td>
			<td>".$row['CUST_NAME']."</td>
			<td>".$row['ITEM_PURCHASE']."</td>
			<td>".$row['MOB_NO']."</td>
		</tr>";
	}
	echo "</table>";
	 
?>
