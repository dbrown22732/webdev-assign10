<?php
error_reporting(0);
include("connection.php");
echo "<br>";
//grab values email and password from login form
$login_email = $_POST['login_email']; //match with the name in the login form
$login_password = $_POST['login_password'];
//create the query and number of rows returned from the query
$query = mysqli_query($dbc, "SELECT * FROM users WHERE email='".$login_email."'");
$numrows = mysqli_num_rows($query);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
//create condition to check if there is 1 row with that email
if($numrows != 0){
//grab the email and password from that row returned before
	while($row = mysqli_fetch_array($query)){
	
		$dbemail = $row['email']; //must matching with the field name in your database table;
		$dbpass = $row['pw'];
		$dbfirstname = $row['first_name'];
        $dbuser_type = $row['user_type'];
		}	
//create condition to check if email and password are equal to the returned row	
	
	if($login_email==$dbemail){
		if($login_password==$dbpass){
            if($dbuser_type == 1){
                //echo "Welcome ".$dbfirstname.", you are in the wonderland! What would you like to do?";
                header("Location: main_admin.php");
                exit();
            }else{
                //echo "Welcome ".$dbfirstname.". What would you like to do?";
                header("Location: main.php");
                exit();
                
            }
		
		}else{		
			echo "your password is incorrect!";
		
		}
	}else{
	
		echo "your email is incorrect!";
	
	}
	
}else{

echo "Invalid credentials! If you are not registered please register below...";

}
}else{

	echo "Please Login...";

}
?>
