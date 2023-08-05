<title>New lecture</title>
<?php include 'header.php'; 


$query1=run("select * from course");

if ($_SESSION['status']!='Lecturer') {
	header('location:../attendance');
}


if (isset($_POST['submit'])) {
	$id=time();
	$course=$_POST['course'];
	$date=$_POST['date'];
	$lecturer=$_SESSION['id'];

	run("insert into lecture values ('$id','$date','$lecturer','$course')");
	header("location:attendance.php?id=$id");
}




 ?>


 <h2>Add new lecture</h2><hr>


<form method="POST" >
	<label>Course</label>
	<select name="course" required class="input is-rounded">
	 	<option value="<?php echo isset($course)? $sex:'' ?>"><?php echo isset($course)? $course:'Select course...' ?></option>
	 	<?php while ($result=mysqli_fetch_array($query1)) {
	 		?><option value="<?php echo $result['course_id'] ?>"><?php echo $result['course_name']; ?></option><?php
	 	} ?>
	 </select><br><br>

	<label>Date</label>
 	<input type="date" name="date" value="<?php echo isset($date)? $date:'' ?>" required class="input is-rounded "><br><br>


 	<input type="submit" name="submit" value="Add"  class="btn">
 </form>

<?php include 'footer.php'; ?>