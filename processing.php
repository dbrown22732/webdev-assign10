<?php
include('connection.php');

$fname = $_POST["fname"]; //variable name in the bracket must match with the name in the form
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
//if values are not empty, proceed to store them in the database

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$query = mysqli_query($dbc, "SELECT * FROM users WHERE email='".$email."'");
$numrows = mysqli_num_rows($query);
//create condition to check if there is 1 row with that email
if($numrows != 0){
//grab the email and password from that row returned before
	while($row = mysqli_fetch_array($query)){
	
		$dbemail = $row['email']; //check to see if email used is already in database	 
            	
		}	
//create condition to check if email and password are equal to the returned row	
	
	

if($email==$dbemail){
	echo "ERROR: email already used by another user. Please try another email.";	
    
    
 }
} else if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($password)){
mysqli_query($dbc, "INSERT INTO users(first_name, last_name, email, pw, phone, user_type ) VALUES ('$fname', '$lname', '$email', '$password', '$phone', 0)");
echo " row inserted, everything worked fine!";
}else{
echo "ERROR: you left some values in blank!";
}

}else{
echo "<strong>Please complete the form...</strong>";
}
?>

