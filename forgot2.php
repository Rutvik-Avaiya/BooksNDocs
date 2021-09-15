
<?php
include("sidebarbeforelogin.php");

session_start();
$username=$_REQUEST['username'];
$email=$_REQUEST['email'];

$con=mysqli_connect("localhost", "root", "","miniproject");
$sql="select username,email from userinfo where username='$username' AND email='$email'";

$result=mysqli_query($con,$sql);
$answer = mysqli_fetch_assoc($result);
if($answer['username']==$username)
{
	$_SESSION['u']=$username;
	header("Location:reset.php?username=".$username);
}
else
{
	echo"Invalid Username or Email.";
	echo"<br><br><a href='index.php'>Click here to Login.</a>";
}

mysqli_close($con);

?>