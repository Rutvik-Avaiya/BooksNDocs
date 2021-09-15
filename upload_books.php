<?php
	include("sidebaradmin.php");
?>
<form action="upload_booksdb.php" method="post" enctype="multipart/form-data">
<table cellpadding="5">
<tr><td>Book Name : </td>
					<td><input type="text" name="b_name" style="width:100%;height:30"/></td></tr>
				<tr><td>Category : </td>
					<td><select name="category" style="width:100%;height:30">
							<option value="default">--Select--</option>
							<option>Architecture</option>
							<option>Civil Engineering</option>
							<option>Automobile Engineering</option>
							<option>Information Technology</option>
							<option>Power Electronics</option>
							<option>Textile Manufacturing</option>
							<option>Textile Processing</option>
							<option>Electrical Engineering</option>
							<option>Mechanical Engineering</option>
						</select></td></tr>
				<tr><td>Description : </td>
					<td><textarea name="description" style="width:100%" rows="5"></textarea></td></tr>
				<tr> <td>Publisher : </td>
					<td><input type="text" name="publisher" style="width:100%;height:30"/></td></tr>
				<tr><td>Edition : </td>
					<td><input type="text" name="edition" style="width:100%;height:30"></td></tr>
				<tr><td>Thumbnail : </td><td><input type="file" id="imgtoupload" name="imgtoupload"/>
				</td></tr>
				<tr><td>Book(File) : </td><td><input type="file" id="pdftoupload" name="pdftoupload"/>
				</td></tr>
				<tr><td><br></td></tr>
			<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Submit" style="margin-right:20;width:80;height:30"/>
					<input type="reset" style="width:80;height:30"/></td></tr>
</table>
</form>
