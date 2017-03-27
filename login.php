<?php
    include("connection.php");
	// First start a session. This should be right at the top of your login page.
	session_start();

	// Check to see if this run of the script was caused by our login submit button being clicked.
	if (isset($_POST['submit'])) {

		// Also check that our email address and password were passed along. If not, jump
		// down to our error message about providing both pieces of information.
		if (isset($_POST['login_email']) && isset($_POST['login_pass'])) {
			$email = $_POST['login_email'];
			$pass = $_POST['login_pass'];


			// Connect to the database and select the user based on their provided email address.
			// Be sure to retrieve their password and any other information you want to save for the user session.
			///$pdo = new Database();
			//$dbc->query("SELECT id, email, password, name, user_type FROM users WHERE email = :emailaddr");
            $query = mysqli_query($dbc, "SELECT * FROM users WHERE email='".$email."'");
			//$dbc->bindTo(':emailaddr', $email);
			$numrows = mysqli_num_rows($query);

			// If the user record was found, compare the password on record to the one provided hashed as necessary.
			// If successful, now set up session variables for the user and store a flag to say they are authorized.
			// These values follow the user around the site and will be tested on each page.
			if (($numrows > 0)) {
                while($row = mysqli_fetch_array($query)){
                    if ($row['email'] = $email){
                        if ($row['pw'] ==  $pass) {
                            
                            $_SESSION['is_auth'] = true;
                            $_SESSION['user_id'] = $row['id'];
                            $_SESSION['email'] = $row['email'];
                            $_SESSION['pass'] = $row['pw'];
                            $_SESSION['fname'] = $row['first_name'];
                            $_SESSION['logout'] = false;
                        
                       if($row['user_type'] == 1){
                           //echo "Welcome ".$dbfirstname.", you are in the wonderland! What would you like to do?";
                           header("Location: main_admin.php");
                           exit();
                       }else{
                           //echo "Welcome ".$dbfirstname.". What would you like to do?";
                           header("Location: main.php");
                           exit();
                        
                        
                    }
                        

				} else {
					echo "Invalid email or password. Please try again.";
				}
			} else {
				echo "Invalid email or password. Please try again.";
			}
                }
		} else {
			echo "Please enter an email and password to login.";
		}
	}
    }
?>