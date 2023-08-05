<?php include 'header.php'; ?>
<title>Delete admin</title>



<?php 

	if (isset($_GET['id'])&&$_SESSION['status']=='Admin') {
		$id=$_GET['id'];
		run("delete from admin where username='$id'");
	}

	header("location:viewadmins.php");


 ?>