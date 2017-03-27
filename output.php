<?php
include("connection.php");
echo "<br>";
$r = mysqli_query($dbc, "SELECT * FROM users");
while ( $row = mysqli_fetch_array($r)){
echo $row['first_name']."/".$row['email'];
echo "<br>";
}
mysqli_close($dbc); //always close the connection for security
//echo "database connection closed." //this echo is for testing stage only, no need to show it to user.
?>