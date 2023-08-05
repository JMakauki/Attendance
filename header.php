<?php session_start(); ?>
<head>
	<link rel="icon" href="attendance.jpg">
</head>

<header>
<div class="header">

<?php 
	include 'dbconnect.php';
	
	

	$minutesBeforeSessionExpire=10;
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > ($minutesBeforeSessionExpire*60))) {
    	session_unset();     // unset $_SESSION   
    	session_destroy();   // destroy session data
	}
	$_SESSION['LAST_ACTIVITY'] = time();

	
	if (!isset($_SESSION['id'])) {
		header('location:signin.php');
	}

?>


<link rel="stylesheet" type="text/css" href="attendance.css">
<link rel="stylesheet" type="text/css" href="bulma.css">
<link rel="stylesheet" type="text/css" href="uikit.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">




<br>
<center><h1>Attendance</h1></center>

<?php 
$uri=$_SERVER['REQUEST_URI'];


 ?>

<nav style="text-align: right;">
	<a href="profile.php" style="text-transform: capitalize;"><i class="fa fa-user-circle"></i> 
	<?php if (isset($_SESSION['name'])) {
		echo $_SESSION['name'] ;
	} ?>
	</a>
</nav>


<nav class="">
	


	
	<?php if (isset($_SESSION['status']) && $_SESSION['status']=='Admin'): ?>
		<a href="../attendance" class="<?php echo $uri=='/attendance/'?'active':''; ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
		<a href="addadmin.php" class="<?php echo $uri=='/attendance/addadmin.php'?'active':''; ?>"><i class="fa fa-user-plus"></i> Add admin</a>
		<a href="viewadmins.php" class="<?php echo $uri=='/attendance/viewadmins.php'?'active':''; ?>"><i class="fa fa-users"></i> View admins</a>
		<a href="addlecturer.php" class="<?php echo $uri=='/attendance/addlecturer.php'?'active':''; ?>"><i class="fa fa-user-plus"></i> Add lecturer</a>
		<a href="viewlecturers.php" class="<?php echo $uri=='/attendance/viewlecturers.php'?'active':''; ?>"><i class="fa fa-users"></i> View lecturers</a>
		<a href="profile.php" class="<?php echo $uri=='/attendance/profile.php'?'active':''; ?>"><i class="fa fa-user"></i> Profile</a>
		<a href="signout.php"><i class="fa fa-sign-out"></i> Sign out</a>
	<?php endif ?>

	<?php if (isset($_SESSION['status']) && $_SESSION['status']=='Lecturer'): ?>
		<a href="../attendance" class="<?php echo $uri=='/attendance/'?'active':''; ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
		<a href="newlecture.php" class="<?php echo $uri=='/attendance/newlecture.php'?'active':''; ?>"><i class="fa fa-calendar-plus"></i> New lecture</a>
		<a href="alllectures.php" class="<?php echo $uri=='/attendance/alllectures.php'?'active':''; ?>"><i class="fa fa-history"></i> All lectures</a>
		<a href="profile.php" class="<?php echo $uri=='/attendance/profile.php'?'active':''; ?>"><i class="fa fa-user"></i> Profile</a>
		<a href="signout.php"><i class="fa fa-sign-out"></i> Sign out</a>
	<?php endif ?>


</nav>




</div>
</header>

<div class="main">

