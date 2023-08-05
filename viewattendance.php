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







?>

<div id='print'>
<h2>Attendance sheet</h2>

<link rel="stylesheet" type="text/css" href="attendance.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">


<b>Course Id:</b> <?php echo $result1['course_id'] ?> &emsp; <b>Date: </b><?php echo $result1['time'] ?> &emsp; <b>Course name:</b> <?php echo $result1['course_name'] ?>


<hr>

<div class="table-container">
<table class="table is-bordered is-hoverable is-striped is-responsive">
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
		$student=$result['student_id'];
		$query2=run("select * from attendance where student='$student' and lecture='$id'");
		$result2=mysqli_fetch_array($query2);
		?>
			<tr>
				<td><?php echo $sn ?></td>
				<td><?php echo $result['student_id'] ?></td>
				<td><?php echo $result['student_name'] ?></td>
				<td><?php echo $result['gender'] ?></td>
				<td><?php echo $result['programme_id'] ?></td>
				<td><center>
					<?php 
						if ($result2['ispresent']=='yes') {
							?><i class="fa fa-check-square blue"></i><?php
						}elseif ($result2['ispresent']=='no'){
							?><i class="fa fa-times-square red"></i><?php
						}
					 ?>
					</center>
				</td>
			</tr>

		<?php $i++; $sn++;
	}
	$total=$i;
	if (mysqli_num_rows($query)==0) {
		?>
			<tr><td colspan="100%"><center>No students enrolled in this course</center></td></tr>
		<?php
	}

	 ?>
</table>
</div>
<hr>
</div>

<center><button class="btn" onclick="printtag('print')" style="height: 30px;">Print</button></center>

<?php include 'footer.php'; ?>


 <script type="text/javascript">
 		
 	function printtag(id){
 		printcontent=document.getElementById(id).innerHTML;
 		originalcontent=document.body.innerHTML;

 		document.body.innerHTML=printcontent;

 		window.print();

 		document.body.innerHTML=originalcontent;
 	}

 </script>