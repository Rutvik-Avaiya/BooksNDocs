		<h2>Admin Panel</h2>
<?php

$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

if($username==="BNDPRJ" && $password==="Admins@0425")
{
	echo"Logged in Successful.";
	header("Location:adminhome.php");
}
else
{
	echo"Invalid Password or Username.";
	echo"<br><br><a href='Admin.php'>Go Back</a>";
}

?>