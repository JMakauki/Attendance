<title>Dashboard</title>

<?php include 'header.php'; ?>

<?php if ($_SESSION['status']=='Lecturer'): ?>
	
	<a href="newlecture.php" style="padding:0px;">
	<div class="mycard fa fa-calendar-plus">
	</div>
	<br>
	<center>New lecture</center>
	</a>

	<a href="alllectures.php" style="padding:0px;">
	<div class="mycard fa fa-history">
	</div>
	<br>
	<center>All lectures</center>
	</a>

	<a href="profile.php" style="padding:0px;">
	<div class="mycard fa fa-user-circle">
	</div>
	<br>
	<center>My profile</center>
	</a>

<?php endif ?>


<?php if ($_SESSION['status']=='Admin'): ?>
	

	<a href="viewadmins.php" style="padding:0px;">
	<div style="" class="mycard fa fa-users">
	</div>
	<br>
	<center>Other Administrators</center>
	</a>

	


	<a href="addadmin.php" style="padding:0px;">
	<div style="" class="mycard fa fa-user-plus">
	</div>
	<br>
	<center>Add Admin</center>
	</a>

	<a href="viewlecturers.php" style="padding:0px;">
	<div style="" class="mycard fa fa-users">
	</div>
	<br>
	<center>View Lecturers</center>
	</a>

	<a href="addlecturer.php" style="padding:0px;">
	<div style="" class="mycard fa fa-user-plus">
	</div>
	<br>
	<center>Add Lecturer</center>
	</a>



	<a href="profile.php" style="padding:0px;">
	<div style="" class="mycard fa fa-user-circle">
	</div>
	<br>
	<center>My Profile</center>
	</a>

<?php endif ?>


	





<?php include 'footer.php'; ?>