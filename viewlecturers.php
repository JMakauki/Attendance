<title>View Admins</title>

<?php include 'header.php'; ?>

<?php 
	if ($_SESSION['status']!='Admin') {
		die("Access denied");
	}

?>
<br><br>

<table class="table is-hoverable is-striped is-bordered">
	<caption><h3>List of all Lecturers</h3></caption>
	<tr>
		<th>S/N</th>
		<th>Name</th>
		<th>Phone number</th>
		<th>Sex</th>
		<th>...</th>
	</tr>


	<?php
		$sn=1;
		$query=run("select * from lecturer");

		while ($result=mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $sn++ ?></td>
					<td><?php echo $result['lecturer_name'] ?></td>
					<td><?php echo $result['phone_number'] ?></td>
					<td><?php echo $result['gender'] ?></td>
					<td><a href="deletelecturer.php?id=<?php echo $result['lecturer_id'] ?>" onclick="return confirm('Delete this Lecturer?')"  title="Delete"><i class="fa fa-trash"></i></a></td>
				</tr>
			<?php
		}

	 ?>
 </table>

 <?php include 'footer.php'; ?>