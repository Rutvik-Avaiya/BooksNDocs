<?php
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$con=mysqli_connect("localhost", "root", "","miniproject");
$sql="select password from userinfo where username='$username'";

$result=mysqli_query($con,$sql);
$answer = mysqli_fetch_assoc($result);

$answer = $answer['password']; 
if($answer===$password)
{
	echo"Logged in Successful.";
	header("Location:homepage.php");
}
else
{
	echo"Invalid Password or Username.";
	echo"<br><br><a href='index.php'>Click here to try again.</a>";
}

mysqli_close($con);
?>