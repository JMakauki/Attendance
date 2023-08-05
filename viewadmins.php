<title>View Admins</title>

<?php include 'header.php'; ?>

<?php 
	if ($_SESSION['status']!='Admin') {
		die("Access denied");
	}

?>
<br><br>

<table class="uk-table uk-table-hover uk-table-striped">
	<caption><h3>List of all Admins</h3></caption>
	<thead>
	<tr>
		<th>S/N</th>
		<th>Username</th>
		<th>Full name</th>
		<th>Phone number</th>
		<th>Sex</th>
		<th>Birth date</th>
		<th>...</th>
	</tr>
	</thead>

	<tbody>
	<?php
		$sn=1;
		$query=run("select * from admin");

		while ($result=mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $sn++ ?></td>
					<td><?php echo $result['username'] ?></td>
					<td><?php echo $result['fullname'] ?></td>
					<td><?php echo $result['phone'] ?></td>
					<td><?php echo $result['sex'] ?></td>
					<td><?php echo $result['birthdate'] ?></td>
					<td><a href="deleteadmin.php?id=<?php echo $result['username'] ?>" onclick="return confirm('Delete this admin?')"  title="Delete"><i class="fa fa-trash"></i></a></td>
				</tr>
			<?php
		}

	 ?>
	 </tbody>
 </table>

 <?php include 'footer.php'; ?>