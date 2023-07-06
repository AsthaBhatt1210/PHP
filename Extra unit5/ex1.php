<?php

$host="localhost";
$usr="root";
$password="";
$db="php practical";

$conn = new mysqli($host, $usr, $password,$db);
if ($conn->connect_error) {
    die("Connection failed::::::: ".$conn->connect_error);
} 
else 
  {
    echo "connection successful...";
    //mysql_close($conn);
  }
?>
<table border=1>
<tr><th>cust_no</th>
	<th>cust_name</th>
	<th>item_purchase</th>
	<th>mob_no</th></tr>
<?php
$qry="select * from customer_table where CUST_NO>1";
$result = $conn->query($qry);
 while($row=$result->fetch_assoc())
 {
	echo "<tr><td> {$row['CUST_NO']} </td>";
	echo "<td> {$row['CUST_NAME'] }</td>";
	echo "<td> {$row['ITEM_PURCHASE']} </td>";
	echo "<td> {$row['MOB_NO']} </td></tr>";
 }
?>
</table>