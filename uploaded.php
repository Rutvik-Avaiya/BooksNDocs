<?php
include("sidebaradmin.php");
$cn=mysqli_connect("localhost","root","","miniproject");
if(isset($_GET['value']))
{
	
	if($_GET['value']=="del")
	{
		$b_id=$_GET['b_id'];
		$q="delete from book WHERE b_id= '".$b_id."'";

		$res=mysqli_query($cn,$q);
		if($res)
		{
			echo "Record Deleted Successfully";
			echo "<html>
			<table border='1'>
			<th>Book ID</th>
			<th>Book Name</th>
<th>Category</th>
<th>Description</th>
<th>Publisher</th>
<th>Edition</th>";
			$sql="select b_name,b_id,b_cat,b_desc,b_publisher,b_edition from book";
			$result=mysqli_query($cn,$sql);
			while($r=mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td>".$r['b_id']."</td>";
				echo "<td>".$r['b_name']."</td>";
			echo "<td>".$r['b_cat']."</td>";
			echo "<td>".$r['b_desc']."</td>";
			echo "<td>".$r['b_publisher']."</td>";
			echo "<td>".$r['b_edition']."</td>";
			}
			echo "</table></form></body></html>";
		}
		else
		{
			die(mysqli_error());
		}
	}
if($_GET['value']=="upd")
{
	$b_id=$_GET['b_id'];
	echo "<html><form action='submt.php' method='GET'><table><tr><td>";
	$sql="select b_id,b_name,b_cat,b_desc,b_publisher,b_edition from book where b_id=".$b_id;
	$result=mysqli_query($cn,$sql);
	$r=mysqli_fetch_assoc($result);
	echo "<b>b_id: </b>".$r['b_id']."</td>";
	echo "<td><input type='hidden' name='b_id' value=".$r['b_id']."></td></tr>";
	echo "<tr><td><b>Book Name: </b></td><td><input type='text' name='b_name' value='".$r['b_name']."'</td></tr>";
	echo "<tr><td><b>Category: </b></td><td><select name='category' style='width:100%;height:30'>
							<option value='default'>--Select--</option>
							<option>Architecture</option>
							<option>Civil Engineering</option>
							<option>Automobile Engineering</option>
							<option>Information Technology</option>
							<option>Power Electronics</option>
							<option>Textile Manufacturing</option>
							<option>Textile Processing</option>
							<option>Electrical Engineering</option>
							<option>Mechanical Engineering</option>
						</select></td></tr>";
	echo "<tr><td><b>Description: </b></td><td><input type='text' name='b_desc' value='".$r['b_desc']."'</td></tr>";
	echo "<tr><td><b>Publisher: </b></td><td><input type='text' name='b_publisher' value='".$r['b_publisher']."'</td></tr>";
	echo "<tr><td><b>Edition: </b></td><td><input type='text' name='b_edition' value='".$r['b_edition']."'</td></tr>";
	echo "<tr><td><input type='submit' name='sub'></td></tr>";
	echo "</table></form></body></html>";
}
}
?>