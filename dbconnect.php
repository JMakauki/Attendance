<?php 

$connect=mysqli_connect("localhost","root","","attendance");
function run($sql){
		$connect=mysqli_connect("localhost","root","","attendance");
		$query=mysqli_query($connect,$sql);
		echo mysqli_error($connect);
		return $query;
}

 ?>