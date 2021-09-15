<html>
	<head><link rel="icon" type="image/gif/png" href="icon.png">
	
		<?php
			include("sidebarbeforelogin.php");
		?>
		<title>Signup</title>
	</head>
	<body>
		<H1><b>Sign Up</align></b></H1>
		<hr></hr>
		<form action="signupdb.php" method="POST">
			<table cellpadding="5">
				<tr><td>First Name : </td>
					<td><input type="text" name="fname" style="width:100%;height:30"/></td></tr>
				<tr><td>Last Name : </td>
					<td><input type="text" name="lname" style="width:100%;height:30"/></td></tr>
				<tr> <td>Gender : </td>
					<td><input type="radio" name="gender" value="Male" checked/>Male<br/>
						<input type="radio" name="gender" value="Female"/>Female</td></tr>
				<tr><td>Email-ID : </td>
					<td><input type="text" name="email" style="width:100%;height:30"></td></tr>
				<tr><td>Phone No. : </td>
					<td><input type="text/number" name="phone" maxlength="12" style="width:100%;height:30"></td></tr>
					<tr><td>Username : </td>
					<td><input type="text" name="username"  style="width:100%;height:30"></td></tr>
				<tr><td>Password : </td>
					<td><input type="password" name="password" maxlength="16" style="width:100%;height:30"></td></tr>
				<tr><td>Confirm Password : </td>
					<td><input type="password" name="confpassword" maxlength="16" style="width:100%;height:30"></td></tr>
				
			<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Submit" style="margin-right:20;width:80;height:30"/>
					<input type="reset" style="width:80;height:30"/></td></tr>
			
</table>
<hr></hr>		
</form>
	</body>
</html>