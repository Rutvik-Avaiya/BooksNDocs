

<?php
include("sidebarbeforelogin.php");
session_start();
$username=$_SESSION['u'];
	$pass=$_REQUEST['pass'];
	$conpass=$_REQUEST['conpass'];
	if($pass===$conpass)
	{
		include("sidebarbeforelogin.php");
		$conn=mysqli_connect("localhost","root","","miniproject");
		$q="UPDATE userinfo SET password='".$pass."' WHERE username='".$username."'";
$res=mysqli_query($conn,$q);
if($res){
echo "Password Updated Successfully";
echo "<br><br><a href='index.php'>Click here to Login</a>";

}
	}
	else
	{
		include("sidebarbeforelogin.php");
		die("Password do not match.");
	}

?>