<?php include 'header.php'; ?>
<title>Delete Lecturer</title>



<?php 

	if (isset($_GET['id'])&&$_SESSION['status']=='Admin') {
		$id=$_GET['id'];
		run("delete from lecturer where lecturer_id='$id'");
	}

	header("location:viewlecturers.php");


 ?>