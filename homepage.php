<html>
<head>
		<?php
			include("sidebar.php");
		?>
</head>


<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 70%;
	padding:10px 10px 10px 10px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 1px 50px;
}


.column {
    float: left;
    width: 20%;
    padding: 10px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

</style>

<body>
<form action="<?php $_PHP_SELF ?>" method="POST">
  <h2>Books</h2>
  <table><tr><td>Category : </td>
					<td><select name="category" style="width:100%;height:30">
							<option value="default">All</option>
							<option>Architecture</option>
							<option>Civil Engineering</option>
							<option>Automobile Engineering</option>
							<option>Information Technology</option>
							<option>Power Electronics</option>
							<option>Textile Manufacturing</option>
							<option>Textile Processing</option>
							<option>Electrical Engineering</option>
							<option>Mechanical Engineering</option>
						</select></td>
						<td><input type="submit" name="submit" value="Submit" style="margin-right:20;width:80;height:30"/></td></tr>
						</table>
						</form>
  <?php
  $conn=mysqli_connect("localhost","root","","miniproject");
  		
  if(isset($_REQUEST['submit']))
  {
 $cat=$_REQUEST['category'];
 
 
 if($cat==="default")
 {
		$sql="select b_name,b_img,b_pdf from book";
		$result=mysqli_query($conn,$sql);	
		while($r=mysqli_fetch_assoc($result))
		{
			echo"  <div class='column'><div class='card'>";
			$img= $r['b_img'];
			$name= $r['b_name'];
			echo"<img src=".$img." alt='$name' style='width:100%'><div class='container'>";
			$pdf= $r['b_pdf'];
			echo"<p><a href=".$pdf." download><h4>".$name."</h4></p></div></div></div>";
		}
 }
 else
 {
	 	$sql="select b_name,b_img,b_pdf from book WHERE b_cat='$cat'";
		$result=mysqli_query($conn,$sql);	
		while($r=mysqli_fetch_assoc($result))
		{
			echo"  <div class='column'><div class='card'>";
			$img= $r['b_img'];
			$name= $r['b_name'];
			echo"<img src=".$img." alt='SQL' style='width:100%'><div class='container'>";
			$pdf= $r['b_pdf'];
			echo"<p><a href=".$pdf." download><h4>".$name."</h4></p></div></div></div>";
		}
 }
  }
  ?>
<!--
  
</div>
<div class="row">
  <div class="column">
<div class="card">
  <img src="upload_img/sql.jpg" alt="SQL" style="width:100%">
  <div class="container">
	<p><a href="upload_pdf/sql.pdf"download><h4>SQL</h4></p>
  </div>
  </div>
</div>


    <div class="column">
<div class="card">
  <img src="upload_img/sql.jpg" alt="SQL" style="width:100%">
  <div class="container">
	<p><a href="upload_pdf/sql.pdf"download><h4>SQL</h4></p>
  </div>
  </div>
</div>
  
</div>
-->

</body>
</html>