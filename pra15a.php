<!DOCTYPE html>
<head>
</head>
	<body>
	<form method="POST" action="pra15b.php">
	<table border="5" bordercolor="black" align="center" bgcolor="grey" height="600px" width="1000px">
		<th colspan="2" align="center"><h2>REGISTRATION FORM </h2> </th>
		
			<tr>
			<td><b>NAME</b></td>
			<td><input type="text" name="uname" placeholder="Enter Name"></td>
			</tr>
			
			<tr>
			<td><b>DOB</b></td>
			<td><input type="Date" name="date" placeholder="Date of Birth"></td>
			</tr>
			
			<tr>
			<td><b>EMAIL</b></td>
			<td><input type="email" name="email" placeholder="Enter Email">
			</tr>
			
			<tr>
			<td><b>PASSWORD</b></td>
			<td><input type="password" name="pass" placeholder="Enter Password">
			</tr>
			
			<tr>
			<td><b>PHONE</b></td>
			<td><input type="text" name="phone" placeholder="Enter Phone">
			</tr>
		
			<tr>
			<td><b>GENDER</b></td>
			<td><input type="radio" name="gender" value="Male">MALE
			<input type="radio" name="gender" value="Female">FEMALE</td>
			</tr>
			
			<tr>
			<td><b>STATE</b></td>
			<td>
			<select id="sat" name="state">
			<option value="STATE">STATE</option>
			<option value="GUJARAT">GUJARAT</option>
			<option value="MAHARASHTRA">MAHARASHTRA</option>
			<option value="KERALA">KERALA</option>
			<option value="KARNATAKA">KARNATAKA</option></select></td>
			</tr>
			
			<tr>
			<td><b>AGREE</b></td>
			<td><input type="checkbox" name="agree">AGREE TERMS AND CONDITION</td>
			</tr>
			
			<tr>
			<td colspan="2" align="center"><input type="submit" name="sub" >
			<input type="submit" name="reset"  value="Reset"></td>
			</tr>
		 </table>
		</form>
	</body>

</html>