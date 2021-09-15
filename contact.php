<html>
	<head><link rel="icon" type="image/gif/png" href="icon.png">
	
		<?php
			include("sidebarbeforelogin.php");
		?>
		<title>Contact Us</title>
	</head>
<form action="contactdb.php" method="POST">
												

											<br>Name :<br>
												<input type='text' name='nm' size=35>
												<br><br><br>
												
												E-mail ID:<br>
												<input type='text' name='email' size=35>
												<br><br><br>
												
												Query:<br>
												<textarea cols="40" rows="10" name='query' ></textarea>
												<br><br><br>

												<input  type='submit' name='btn' value='   OK   '  >

												
										</form>
