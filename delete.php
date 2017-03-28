<?php include('authentication.php'); ?>
<?php $title = 'Delete'; ?>
<?php $currentPage = 'delete'; ?>
<html>
<?php include('head.php'); ?>
<?php include('navbar-admin.php'); ?>

<body>
    <h3>Are you sure you want to delete this user?</h3>
<form action="delete.php" method="post">
    <p>Email: <input type="text" name= "login_email" size="20" maxlength="50" /></p>
    <p><input type="submit" name="submit" value="Delete User" /></p>
</form>
<a href = "main_admin.php">Back to Home</a><p></p>
</body>
</html>




<?php
//avoid error notices, display only warnings:
error_reporting(0);
//check if user clicked the delete button in the form:
If($_SERVER['REQUEST_METHOD'] == 'POST'){
include("connection.php");	
$email = $_POST["login_email"];
//delete user where email = $email_from_form_input: 
mysqli_query($dbc, "DELETE FROM users WHERE email='".$email."' ");	
    
if(mysqli_affected_rows($dbc) == 1){
				//Ok message confirmation:	
echo "The user has been successfully deleted!";
			}else{
				echo "The user could not be deleted due to a system error";
			}    
    
}


?>
