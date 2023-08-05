<title>Attendance</title>

<?php 

include 'header.php'; 

if (isset($_GET['id'])) {
	$id=$_GET['id'];
}else 
	header("location:alllectures.php");


$query1=run("select * from lecture,course where lecture_id='$id' and lecture.course_id=course.course_id");
$result1=mysqli_fetch_array($query1);
$course=$result1['course_id'];


$query=run("select s.student_id,s.student_name,s.gender,s.programme_id from student as s, programme_structure as ps where s.programme_id=ps.programme_programme_id and course_course_id='$course'");

if (isset($_POST['submit'])) {
	$j=0;
	$total=$_POST['total'];
	$lecture=$_POST['lecture'];
	while ($j<$total) {
		$ispresent=$_POST["ispresent$j"];
		$student=$_POST["student$j"];
		run("insert into attendance values ('$ispresent','$student','$lecture')");
		
		$j++;
	}
}

$query2=run("select * from attendance where lecture='$id'");
if (mysqli_num_rows($query2)) {
	header("location:viewattendance.php?id=$id");
}




?>

<h2>Attendance sheet</h2>

<b>Course Id:</b> <?php echo $result1['course_id'] ?> &emsp; <b>Date: </b><?php echo $result1['time'] ?> &emsp; <b>Course name:</b> <?php echo $result1['course_name'] ?>


<hr>


<form method="post" style="width: 100%;">
<table class="table">
	<tr>
		<th>S/N</th>
		<th>Student Id</th>
		<th>Name</th>
		<th>Gender</th>
		<th>Programme</th>
		<th>Is Present</th>
	</tr>
	<?php $i=0; $sn=1;?>

	<?php while ($result=mysqli_fetch_array($query)) {
		?>
			<tr>
				<td><?php echo $sn ?></td>
				<td>
					<?php echo $result['student_id'] ?>
					<input type="hidden" value="<?php echo $result['student_id'] ?>" name="student<?php echo $i ?>">
				</td>
				<td><?php echo $result['student_name'] ?></td>
				<td><?php echo $result['gender'] ?></td>
				<td><?php echo $result['programme_id'] ?></td>
				<td>
					<input type="radio" name="ispresent<?php echo $i ?>" value="no" class="noneradio" required><i class="fa fa-times red"></i> &emsp; 
					<input type="radio" name="ispresent<?php echo $i ?>" value="yes" class="noneradio" ><i class="fa fa-check blue"></i>
				</td>
			</tr>

		<?php $i++; $sn++;
	}
	$total=$i;
	if (mysqli_num_rows($query)==0) {
		?>
			<tr><td colspan="100%"><center>No students enrolled in this course</center></td></tr>
		<?php
	}else{

	}

	 ?>
</table>
<hr>
<input type="hidden" name="lecture" value="<?php echo $_GET['id'] ?>">
<input type="hidden" name="total" value="<?php echo $total ?>">

<?php if (mysqli_num_rows($query)): ?>
	<input type="submit" name="submit" value="Sumbit" class="btn">
<?php endif ?>


</form>


<?php include 'footer.php'; ?>