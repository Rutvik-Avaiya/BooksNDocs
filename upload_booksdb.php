<?php
	include("sidebaradmin.php");

$cat=$_REQUEST['category'];
$desc=$_REQUEST['description'];
$pub=$_REQUEST['publisher'];
$edt=$_REQUEST['edition'];
$name=$_REQUEST['b_name'];

$con=mysqli_connect("localhost", "root", "","miniproject");


$img_target_dir="upload_img/";
$pdf_target_dir="upload_pdf/";

$target_file=$img_target_dir.basename($_FILES["imgtoupload"]["name"]);
$pdf_target_file=$pdf_target_dir.basename($_FILES["pdftoupload"]["name"]);

//$imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);
//$pdfFileType=pathinfo($target_file,PATHINFO_EXTENSION);

$check=getimagesize($_FILES["imgtoupload"]["tmp_name"]);
	
	if($check !== false && $_FILES['pdftoupload']['type'] = "application/pdf")
	{

		$filename=$_FILES["imgtoupload"]["name"];
		$filenamepdf=$_FILES["pdftoupload"]["name"];
					if (file_exists($target_file)&&file_exists($pdf_target_file)) 
					{
						echo "<br><br>Sorry, file already exists.";
					}
					else if (move_uploaded_file($_FILES["imgtoupload"]["tmp_name"], $target_file) && move_uploaded_file($_FILES["pdftoupload"]["tmp_name"], $pdf_target_file)) 
					{
						$sql="insert into book(b_name,b_cat,b_desc,b_publisher,b_edition,b_img,b_pdf) values('$name','$cat','$desc','$pub','$edt','$target_file','$pdf_target_file')";

						$result=mysqli_query($con,$sql);
					
						echo "<br><br>Data Inserted Successfully.";
					}
					else 
					{
						echo "<br><br>Sorry, there was an error uploading your file.";
					}
	}
	else
	{
		echo"File is not of Image or PDF type.";
	}

?>