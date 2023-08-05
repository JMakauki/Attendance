<?php include 'header.php'; ?>
<title>Add admin</title>


<?php 

	if ($_SESSION['status']!='Admin') {
		die("Access denied");
	}
 ?>


<center><h2>Add admin</h2></center>

<?php 

	if (isset($_POST['submit'])) {
		$username=$_POST['username'];
		$fullname=$_POST['fullname'];
		$phone=$_POST['phone'];
		$sex=$_POST['sex'];
		$birthdate=$_POST['birthdate'];
		$password=$_POST['password'];
		$confirm=$_POST['confirm'];
		
		if ($password!=$confirm) {
			echo "<center style='color:red'><i>Passwords do not match</i></center>";
		}else{
			if (mysqli_num_rows(run("select * from admin where username='$username'"))) {
				echo "<center style='color:red'><i>Someone has been registered with this username. Try another username</i></center>";
			}else{
				run("insert into admin values('$username','$fullname','$phone','$sex','$birthdate','$password')");
				echo "<center style='color:green'><i>One admin is added successfully</i></center>";
				die();
			}
		}
	}



 ?>


<form method="POST" >
	<label>Username</label>
 	<input type="text" name="username" placeholder="First Name" value="<?php echo isset($username)? $username:'' ?>" required class="uk-input uk-border-rounded"><br><br>

 	<label>Full name</label>
 	<input type="text" name="fullname" value="<?php echo isset($fullname)? $fullname:'' ?>" placeholder="Full name" required class="uk-input uk-border-rounded"><br><br>

 	<label>Phone number</label>
 	<input type="text" name="phone" placeholder="Phone number" value="<?php echo isset($phone)? $phone:'' ?>" required class="uk-input uk-border-rounded"><br><br>

 	<label>Sex</label>
	<select name="sex" required class="uk-input uk-border-rounded">
	 	<option value="<?php echo isset($sex)? $sex:'' ?>"><?php echo isset($sex)? $sex:'Select sex...' ?></option>
	 	<option value="Male">Male</option>
	 	<option value="Female">Female</option>
	 </select>

 	<br><br>

 	<label>Birth Date</label>
 	<input type="date" name="birthdate" placeholder="" title="Birthdate" value="<?php echo isset($birthdate)? $birthdate:'' ?>" required class="uk-input uk-border-rounded"><br><br>

 	<label>Password</label>
 	<input type="password" name="password" placeholder="Password" value="<?php echo isset($password)? $password:'' ?>" required class="uk-input uk-border-rounded"><br><br>

 	<label>Confirm password</label>
 	<input type="password" name="confirm" placeholder="Confirm password" value="<?php echo isset($confirm)? $confirm:'' ?>" required class="uk-input uk-border-rounded"><br><br>


 	<input type="submit" name="submit" value="Add"  class="uk-button-primary uk-border-rounded">
 </form>

<?php include 'footer.php'; ?>