

<?php include('authentication.php'); ?>
<?php $title = 'Edit User'; ?>
<?php $currentPage = 'Edit User'; ?>
<html>
<?php include('head.php'); ?>
<?php include('navbar-admin.php'); ?>
<body>
   
<form action="edit.php" method="post">
<p>Old Email: <input type="text" name= "email" size="20" maxlength="50" /></p>
    <p>New Email: <input type="text" name= "new_email" size="20" maxlength="50" /></p>
<p>New Phone: <input type="text" name = "new_phone" size = 20 maxlength = 50 /></p>
<p><input type="submit" name="submit" value="Change account" /></p>
</form>
    <?php include('footer.php'); ?>
</body>
</html>


<?php

//avoid error notices, display only warnings:
error_reporting(0);

//check if user submitted form:
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
	//connect to database:
	include('connection.php');
	echo "<br />";
	
	//Create an array for errors:
	$errors = array();
	
	//check for new email address:
	if (empty($_POST['email'])){
		$errors[] = 'You forgot to enter an email!';
	}else{
$e = mysqli_real_escape_string($dbc, trim($_POST['email'])); //escape is to have input such as O’Hara; trim removes the space, return, etc.
	}	
     //confirm new email address
     if (!empty($_POST['new_email'])){
			$ne = mysqli_real_escape_string($dbc, trim($_POST['new_email'])); //escape is to have input such as O’Hara; trim removes the space, return, etc.
	}	
	
     if (!empty($_POST['new_phone'])){
			$nph = mysqli_real_escape_string($dbc, trim($_POST['new_phone'])); //escape is to have input such as O’Hara; trim removes the space, return, etc.
	}else if (empty($_POST['new_email'])){
         $errors[] = 'You forgot to enter either an email or phone number to update!';
	}	

	//if there is no errors:
	if(empty($errors)){
		//create query and return number of rows where email = $e and password = $p:
		$q = "SELECT id FROM users WHERE (email='$e')"; //query the database
		$r = mysqli_query($dbc, $q); //store the query result which are all the IDs that matching the email
		$num = mysqli_num_rows($r); //return how many records matched; should be one
		
		//get user id where email = $e and password = $p:
		if($num >0){
			$row = mysqli_fetch_array($r, MYSQLI_NUM);
				
            
            if (!empty($_POST['new_email'])){
                //Make the UPDATE query:
			$q = "UPDATE users SET email='$ne' WHERE id='$row[0]'";
			$r = mysqli_query($dbc, $q);
	}	
			if (!empty($_POST['new_phone'])){
                //Make the UPDATE query:
			$q = "UPDATE users SET phone='$nph' WHERE id='$row[0]'";
			$r = mysqli_query($dbc, $q);
	}	
            
			//if everything was ok:
			if(mysqli_affected_rows($dbc) == 1){
				//Ok message confirmation:
				echo "Thanks! You have updated your data!";
			}else{
				echo "Your data could not be changed due to a system error";
			}
			
			//close connection to db:
			mysqli_close($dbc);
		}else{
			echo "The email does not match our records!";
		}
	}else{
		echo "Error! The following error(s) occurred: <br />";
		foreach($errors as $msg){
			echo $msg."<br />";
		}
	} 
 
 }
