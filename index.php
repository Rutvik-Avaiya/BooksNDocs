<html>
	<head><link rel="icon" type="image/gif/png" href="icon.png">
	
		<?php
			include("sidebarbeforelogin.php");
		?>
		<title>Login</title>
	</head>
	<body>
		<H1><b>Login</b></H1>
		<hr></hr>
		<form action="logindb.php" method="POST">
			<table cellpadding="5">
				<tr><td>Username : </td>
					<td><input type="text" name="username" style="width:100%;height:30"/></td></tr>
				
				<tr><td>Password : </td>
					<td><input type="password" name="password" maxlength="16" style="width:100%;height:30"></td></tr>
				
			<tr><td colspan="2" align="center"><input type="submit" value="Submit" style="margin-right:20;width:80;height:30"/>
					
</table>
<br>
Not a user?  &ensp;<a href="signup.php">  Click me to join us</a>
<hr><br>
<a href="forgot.php">  Forgot Your Password?</a>
<hr>
		
</form>
	</body>
</html>