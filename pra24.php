<?php
/*Write a program to read employee information like emp_no,emp_name, designation and salary from EMP table and display all this information using table format.*/
 $con = mysqli_connect('localhost','root','');
 mysqli_select_db($con,'php practical');
?>
<html>
	<head>
	   <title> Display Form Database</title>
	</head>
		<table border="1">
			<tr>
				<th>emp_no </th>
				<th>emp_name</th>
				<th>designation</th>
				<th>salary</th>
			</tr>
	<?php
		$sql="SELECT * FROM emp";
		$query = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($query))
		{
	?>
		<tr>
			<td><?php echo $row['emp_no']?></td>
			<td><?php echo $row['emp_name']?></td>
			<td><?php echo $row['designation']?></td>
			<td><?php echo $row['salary']?></td>
		</tr>
	<?php
		}
	?>
</table>
