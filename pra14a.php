<!DOCTYPE html>
<head>
</head>
	<body>
	<form method="POST" action="pra14b.php">
		<table border="5" bordercolor="black" align="center" bgcolor="grey" height="600px" width="1000px">
		<th colspan="2" align="center"><h2>STUDENT REGISTRATION FORM </h2> </th>
		
			<tr>
			<td><b>NAME</b></td>
			<td><input type="text" name="uname" placeholder="Enter Name"></td>
			</tr>
			
			<tr>
			<td><b>DEPARTMENT</b></td>
			<td>
			<select>
			<option value="DEPARTMENT">DEPARTMENT</option>
			<option value="I.T">I.T</option>
			<option value="COMPUTER">COMPUTER</option>
			<option value="E.C">E.C</option>
			<option value="ARCHITECH">ARCHITECH</option></select></td>
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
			<td><b>ADDRESS</b></td>
			<td><textarea name="add" placeholder="Enter Address"></textarea></td>
			</tr>
			
			<tr>
			<td><b>GENDER</b></td>
			<td><input type="radio" name="gender" value="Male">MALE
			<input type="radio" name="gender" value="Female">FEMALE</td>
			</tr>
			
			<tr>
			<td><b>AGREE</b></td>
			<td><input type="checkbox" name="agree">AGREE TERMS AND CONDITION</td>
			</tr>
			
			<tr >
			<td colspan="2" align="center"><input type="submit" name="sub" ></td>
			</tr>
		</table>
		</form>
	</body>
</html>