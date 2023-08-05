<title>Attendance</title>

<?php 

include 'header.php'; 

if ($_SESSION['status']!='Lecturer') {
	header("location:../attendance");
}

$id=$_SESSION['id'];
$query1=run("select * from lecture NATURAL JOIN lecturer NATURAL JOIN course where lecturer_id='$id' ORDER BY lecture_id DESC");
$query=run("select * from lecturer where lecturer_id='$id'");
$result=mysqli_fetch_array($query);


?>

<h2>All lectures</h2>
<b>Lecturer name:</b> <?php echo $result['lecturer_name'] ?>


<hr>


<table class="table is-hoverable is-striped is-bordered">
	<tr>
		<th>S/N</th>
		<th>Date</th>
		<th>Course</th>
		<th>More</th>
	</tr>
	<?php $i=0; $sn=1;?>

	<?php while ($result1=mysqli_fetch_array($query1)) {
		
		$lecture_id=$result1['lecture_id'];
		?>
			<tr>
				<td><?php echo $sn ?></td>
				<td><?php echo $result1['time'] ?></td>
				<td><?php echo $result1['course_name'] ?></td>
				<td><a href="attendance.php?id=<?php echo $lecture_id ?>" title="View attendance"><i class="fa fa-user-check"></i></a></td>
				
			</tr>

		<?php $i++; $sn++;
	}
	$total=$i;
	if (mysqli_num_rows($query1)==0) {
		?>
			<tr><td colspan="100%"><center>You don't have any lecture. <a href="newlecture.php">Add new lecture</a></center></td></tr>
		<?php
	}

	 ?>
</table>
<hr>

<?php include 'footer.php'; ?>