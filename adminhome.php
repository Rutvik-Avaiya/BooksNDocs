<html>
<head>
		<?php
			include("sidebaradmin.php");
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
    padding: 1px 75px;
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

  <h2>Books</h2>
 <?php
 include("upload_books.php");
  ?>

</body>
</html>