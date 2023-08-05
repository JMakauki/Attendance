<title>NIDA | Profile</title>

<?php include 'header.php'; ?>

<center><h2>Profile</h2></center>
<hr>
	
	<?php if ($_SESSION['status']=='Lecturer'){ 
		$id=$_SESSION['id'];
		$result=mysqli_fetch_array(run("select * from lecturer where lecturer_id='$id'"));
		?>

		<table class="table">
			<tr>
				<th>Name</th>
				<td style="text-transform: capitalize;"><?php echo $result['lecturer_name'] ?></th>
			</tr>
			
			<tr>
				<th>Gender</th>
				<td><?php echo $result['gender']; ?></th>
			</tr>
			<tr>
				<th>Phone number</th>
				<td><?php echo $result['phone_number']; ?></th>
			</tr>
			
		</table>

	<?php } else if($_SESSION['status']=='Admin'){
		$id=$_SESSION['id'];
		$result=mysqli_fetch_array(run("select * from admin where username='$id'"));
		?>

		<table class="table">
			<tr>
				<th>Username</th>
				<td><?php echo $result['username']; ?></th>
			</tr>
			<tr>
				<th>Name</th>
				<td style="text-transform: capitalize;"><?php echo $result['fullname']; ?></th>
			</tr>
			<tr>
				<th>Phone number</th>
				<td><?php echo $result['phone']; ?></th>
			</tr>
			
			
		</table>
		
	<?php } ?>
		<center>
			
			<br>
			<a class="btn" href="changepassword.php">Change password</a><br><br>
			<a class="btn" href="signout.php" onclick="return confirm('Are you sure you want to sign out?')">Sign out</a>

			<br><br><br><br>

		</center>

<?php include 'footer.php'; ?>