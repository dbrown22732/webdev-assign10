<?php include('authentication.php'); ?>
<?php
$_SESSION['logout'] = true;
header("Location: logout.php");
exit();
?>