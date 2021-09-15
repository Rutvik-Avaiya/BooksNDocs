<html>
<head>
		<?php
			include("sidebaradmin.php");
		?>
</head>
<h2>Queries</h2>

<?php

$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"miniproject");
$sql="select * from contact";
$result=mysqli_query($con,$sql);
$records=mysqli_num_rows($result);

echo"<table border=1><th>User Name</th><th>User Email</th><th>User Query</th>";

for($i=1;$i<=$records;$i++)
{
	$ans=mysqli_fetch_array($result,MYSQLI_ASSOC);	
	echo"<tr>";
	foreach($ans as $values)
	{
		echo"<td>".$values."</td>";
	}
	echo"</tr>";
}

echo"</table>";
mysqli_close($con);

?>
</html>