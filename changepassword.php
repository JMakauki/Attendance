<?php include 'header.php'; ?>

<title>NIDA | Badilisha Nywila</title>


<center><h2>BADILISHA NYWILA</h2></center>
 <hr>


<?php 

if (isset($_POST['submit'])) {
    
    $id=$_SESSION['id'];
    $oldpassword=mysqli_real_escape_string($connect,$_POST['oldpassword']);
    $newpassword=mysqli_real_escape_string($connect,$_POST['newpassword']);
    $confirm=mysqli_real_escape_string($connect,$_POST['confirm']);

    if ($_SESSION['status']=='Lecturer') {
        $query=run("select * from Lecturer where Lecturer_id='$id' and password='$oldpassword' limit 1");
    }else if ($_SESSION['status']=='Admin') {
        $query=run("select * from admin where username='$id' and password='$oldpassword' limit 1");
    }
    $result=mysqli_fetch_array($query);

    
    if ($oldpassword != $result['password']) {
        ?><i style="color: red;">Old password is wrong</i><?php
    }else if ($confirm != $newpassword) {
        ?><i style="color: red;">New passwords do not match</i><?php
    }
    else{
        if ($_SESSION['status']=='Lecturer') {
            $query=run("update lecturer set password='$newpassword' where lecturer_id='$id'");
        }else if ($_SESSION['status']=='Admin') {
            $query=run("update admin set password='$newpassword' where username='$id'");
        }

        if ($query){
            ?><h4 style="color: green;">Password is successfully changed</h4><?php
            die();
        }
        
    }


    
}


 ?>


 <form method="POST" >
 		<input type="password" name="oldpassword" placeholder="Old password" required class="input is-rounded is-info"><br><br>	
 		<input type="password" name="newpassword" placeholder="New password" required class="input is-rounded is-info"><br><br>
 		<input type="password" name="confirm" placeholder="Confirm new password" required class="input is-rounded is-info"><br><br>
 		<input type="submit" name="submit" class="button is-link is-rounded is-responsive">
 
 </form>

<?php include 'footer.php'; ?>