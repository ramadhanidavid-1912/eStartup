<html>
<head>
	<title> LOGIN OPERATOR </title>
</head>
<body>
	<h3> LOGIN OPERATOR </h3>
<form method="POST" action="2olah_login.php">
	<table>
		<tr>
			<td> ID / NIM </td>
			<td> <input type="text" name="idoperatorform"> </td>
		</tr>
		<tr>
			<td> PASSWORD </td>
			<td> <input type="password" name="passwordform"> </td>
		</tr>
		<tr>
			<td> STATUS </td>
			<td> <select name ="statusform">
							<option>Admin</option>
							<option>Operator</option>
							</select>
			
		</tr>
			<td> <input type="submit" value="LOGIN"> </td>
		</tr>

	</table>
	

</form>
</body>
</html>