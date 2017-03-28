
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
	if (empty($_POST['new_email'])){
		$errors[] = 'You forgot to enter your email!';
	}else{
$e = mysqli_real_escape_string($dbc, trim($_POST['new_email'])); //escape is to have input such as O’Hara; trim removes the space, return, etc.
	}	
     //confirm new email address
     if (empty($_POST['new_phone'])){
			$errors[] = 'You for got to type in your new phone number!';
	}else{
$nph = mysqli_real_escape_string($dbc, trim($_POST['new_phone'])); //escape is to have input such as O’Hara; trim removes the space, return, etc.
	}	
	
	//check current password:
	if (empty($_POST['pass'])){
		$errors[] = 'You forgot to enter your current password!';
	}else{
		$p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
        $p_hash = password_hash($p, PASSWORD_DEFAULT);
	}
	
	//check for a new password and compare it with confirmed password:
	if (!empty($_POST['pass'])){
		if ($_POST['pass'] == $_POST['pass_confirm']){
            if ($_POST['pass'] != $_SESSION['pass']){
                $errors[] = 'Your password was incorrect!';
            } else{
			$np = mysqli_real_escape_string($dbc, trim($_POST['pass']));
		}
        }
        else{
			$errors[] = 'You did not confirm your password!';
		}
    }
        else{
		$errors[] = 'You forgot to enter your password!';
	}
    

     
     
	//if there is no errors:
	if(empty($errors)){
		//create query and return number of rows where email = $e and password = $p:
		$q = "SELECT id FROM users WHERE (email='$e')"; //query the database
		$r = mysqli_query($dbc, $q); //store the query result which are all the IDs that matching the email
		$num = mysqli_num_rows($r); //return how many records matched; should be one
		
		//get user id where email = $e and password = $p:
		if($num > 0){
			$row = mysqli_fetch_array($r, MYSQLI_NUM);
				
			//Make the UPDATE query:
			$q = "UPDATE users SET phone='$nph' WHERE id='$row[0]'";
			$r = mysqli_query($dbc, $q);
			
			//if everything was ok:
			if(mysqli_affected_rows($dbc) == 1){
				//Ok message confirmation:
				echo "Thanks! You have updated your phone number!";
			}else{
				echo "Your phone number could not be changed due to a system error";
			}
			
			//close connection to db:
			mysqli_close($dbc);
		}else{
			echo "The email and password do not match our records!";
		}
	}else{
		echo "Error! The following error(s) occurred: <br />";
		foreach($errors as $msg){
			echo $msg."<br />";
		}
	} 
 
 }

