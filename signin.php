<?php 
include 'dbconnect.php';
session_start();
 ?>
<title>Sign in</title>


<link rel="stylesheet" type="text/css" href="attendance.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<link rel="icon" href="attendance.jpg">

<header><br><br>
	<center><h1><br>Attendance</h1></center>

<br>

<!-- register -->

<!-- <nav>
	<a href="register.php"><i class="fa fa-user-plus"></i> Register</a>
</nav>
 -->

</header>

<div style="background: #f9f9ff; margin-top: -20;">

<center><h2>Sign in</h2></center>

<?php 
	if (isset($_POST['submit'])) {
		session_unset();
		$username=mysqli_real_escape_string($connect,$_POST['username']);
		$password=$_POST['password'];
		$query=run("select * from lecturer where phone_number='$username' and password='$password' limit 1");
		if (mysqli_num_rows($query)) {
			
			$result=mysqli_fetch_array($query);
			
			$_SESSION['status']='Lecturer';
			$_SESSION['id']=$result['lecturer_id'];
			$_SESSION['sex']=$result['gender'];
			$_SESSION['name']=$result['lecturer_name'];
			header('location:../attendance');
		
		}else {
			$query=run("select * from admin where username='$username' and password='$password' limit 1");
			if (mysqli_num_rows($query)) {
				
				$result=mysqli_fetch_array($query);
				
				$_SESSION['status']='Admin';
				$_SESSION['id']=$result['username'];
				$_SESSION['sex']=$result['sex'];
				$_SESSION['name']=$result['fullname'];
				header('location:../attendance');
				
			}else{
				echo "<center><i style='color:red'>Invalid Username or Password</i></center>";
			}
		}
		
	}
 ?>

 <form method="POST" >
 	<input type="text" name="username" placeholder="Username (Phone number)" required><br><br>
 	<input type="password" name="password" placeholder="Password" required><br><br>
 	<input type="submit" name="submit" value="Sign in" class="btn">
 </form>

<?php include 'footer.php'; ?>