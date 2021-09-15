<?php

$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$confpassword=$_REQUEST['confpassword'];
if($password===$confpassword)
{
$con=mysqli_connect("localhost", "root", "","miniproject");
$sql="insert into userinfo values('$fname','$lname','$gender','$email','$phone','$password','$username')";
$result=mysqli_query($con,$sql);

if($result)
{
	echo"SignUp Successful.";
	header("Location:index.php");
}
else
{
	die(mysqli_error($con));	
}

mysqli_close($con);
}
else
{
	include("sidebarbeforelogin.php");
	die("Password do not match.");
}
?>
