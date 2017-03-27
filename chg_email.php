<?php include('authentication.php'); ?>
<?php $title = 'Change Email'; ?>
<?php $currentPage = 'chg_email'; ?>
<html>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<body>
    <h3>Change Email</h3>
<form action="chg_email.php" method="post">
    <p>Current Email: <input type="text" name= "email" size="20" maxlength="50" /></p>
    <p>New Email: <input type="text" name= "new_email" size="20" maxlength="50" /></p>
    <p>Password:<input type="password" name="pass" maxlength="50" /></p>
    <p>Confirm Password:<input type="password" name="pass_confirm" maxlength="50" /></p>
    <p><input type="submit" name="submit" value="Submit" /></p>
</form>

    
<?php include('footer.php'); ?>
</body>
</html>

<?php include('changeemail.php'); ?>

