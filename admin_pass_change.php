<?php include('authentication.php'); ?>
<?php $title = 'Password Change'; ?>
<?php $currentPage = 'admin_pass_change'; ?>
<html>
<?php include('head.php'); ?>
<?php include('navbar-admin.php'); ?>

<body>

<?php
include('connection.php');
 ?>   

        <h3>Change User Password</h3>
<form action="admin_pass_change.php" method="post">
    <p>User Email: <input type="text" name= "email" size="20" maxlength="50" /></p>
    <p>Current User Password: <input type="password" name= "pass" size="20" maxlength="50" /></p>
    <p>New Password:<input type="password" name="pass1" maxlength="50" /></p>
    <p>Confirm Password:<input type="password" name="pass2" maxlength="50" /></p>
    <p><input type="submit" name="submit" value="Submit" /></p>
</form>
    
<?php include('footer.php'); ?>
</body>
</html>

<?php include('changepw.php'); ?>