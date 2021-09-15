<form method="POST">
<table border='1'>
<th>Book ID</th>
<th>Book Name</th>
<th>Category</th>
<th>Description</th>
<th>Publisher</th>
<th>Edition</th>

<?php
include("sidebaradmin.php");
		$conn=mysqli_connect("localhost","root","","miniproject");
		$sql="select b_id,b_name,b_cat,b_desc,b_publisher,b_edition from book";
		$result=mysqli_query($conn,$sql);	
		while($r=mysqli_fetch_assoc($result))
		{
			echo "<tr>";
			echo "<td>".$r['b_id']."</td>";
			echo "<td>".$r['b_name']."</td>";
			echo "<td>".$r['b_cat']."</td>";
			echo "<td>".$r['b_desc']."</td>";
			echo "<td>".$r['b_publisher']."</td>";
			echo "<td>".$r['b_edition']."</td>";
			echo "<td> <a href=uploaded.php?b_id=".$r['b_id']."&value=del>Delete</a></td>";
			echo "<td> <a href=uploaded.php?b_id=".$r['b_id']."&value=upd>Update</a></td></tr>";
		}
		echo "<tr><td><a href=uploaded.php?value=dellall>Delete All</a></td></tr>";
?>
</table>
</form>
