<?php include 'header.php'; ?>
<title>Add Lecturer</title>


<?php 

	if ($_SESSION['status']!='Admin') {
		die("Access denied");
	}
 ?>


<center><h2>Add Lecturer</h2></center>

<?php 

	if (isset($_POST['submit'])) {
		$time=time();
		$name=$_POST['name'];	
		$phone=$_POST['phone'];
		$sex=$_POST['sex'];		
		$password=$_POST['password'];
		$confirm=$_POST['confirm'];
		
		if ($password!=$confirm) {
			echo "<center style='color:red'><i>Passwords do not match</i></center>";
		}else{
			if (mysqli_num_rows(run("select * from lecturer where phone_number='$phone'"))) {
				echo "<center style='color:red'><i>Someone has been registered with this Phone number. Try another number</i></center>";
			}else{
				run("insert into lecturer values('$time','$name','$sex','$phone','$password')");
				echo "<center style='color:green'><i>One lecturer is added successfully</i></center>";
				die();
			}
		}
	}



 ?>


<form method="POST" >
	<label>Name</label>
 	<input type="text" name="name" placeholder="Name" value="<?php echo isset($name)? $name:'' ?>" required class="input is-rounded"><br><br>

 	
 	<label>Phone number</label>
 	<input type="text" name="phone" placeholder="Phone number" value="<?php echo isset($phone)? $phone:'' ?>" required class="input is-rounded"><br><br>

 	<label>Sex</label>
	<select name="sex" required class="input is-rounded">
	 	<option value="<?php echo isset($sex)? $sex:'' ?>"><?php echo isset($sex)? $sex:'Select sex...' ?></option>
	 	<option value="Male">Male</option>
	 	<option value="Female">Female</option>
	 </select>

 	<br><br>

 	<label>Password</label>
 	<input type="password" name="password" placeholder="Password" value="<?php echo isset($password)? $password:'' ?>" required class="input is-rounded"><br><br>

 	<label>Confirm password</label>
 	<input type="password" name="confirm" placeholder="Confirm password" value="<?php echo isset($confirm)? $confirm:'' ?>" required class="input is-rounded"><br><br>


 	<input type="submit" name="submit" value="Add"  class="button is-rounded is-info is-outlined">
 </form>

<?php include 'footer.php'; ?>