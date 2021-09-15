<?php
include("sidebaradmin.php");
			$id=$_GET['b_id'];
			$name=$_GET['b_name'];
			$cat=$_GET['category'];
			$desc=$_GET['b_desc'];
			$pub=$_GET['b_publisher'];
			$edt=$_GET['b_edition'];
$cn=mysqli_connect("localhost","root","","miniproject");
$q="UPDATE book SET b_name='".$name."',b_cat='".$cat."',b_desc='".$desc."',b_publisher='".$pub."',b_edition='".$edt."' WHERE b_id='".$id."'";
$res=mysqli_query($cn,$q);
if($res){
echo "Record Updated Successfully";

}
?>