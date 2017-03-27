<?php include('authentication.php'); ?>
<?php $title = 'Change Phone'; ?>
<?php $currentPage = 'chg_phone'; ?>
<html>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>

<body>
    <h3>Change Phone Number</h3>
<form action="chg_phone.php" method="post">
    <p>Current Email: <input type="text" name= "new_email" size="20" maxlength="50" /></p>
    <p>New Phone Number: <input type="text" name= "new_phone" size="20" maxlength="50" /></p>
    <p>Password:<input type="password" name="pass" maxlength="50" /></p>
    <p>Confirm Password:<input type="password" name="pass_confirm" maxlength="50" /></p>
    <p><input type="submit" name="submit" value="Submit" /></p>
</form>

    
<?php include('footer.php'); ?>
</body>
</html>
<?php include('changephone.php'); ?>
