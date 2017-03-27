<?php $title = 'Login'; ?>
<?php $currentPage = 'index'; ?>
<html>
<?php include('head.php'); ?>

<body>
    
<form action="login.php" method="post">
    <p>Email: <input type="text" name= "login_email" size="20" maxlength="50" /></p>
    <p>Password:<input type="password" name="login_pass" maxlength="50" /></p>
    <p><input type="submit" name="submit" value="Submit" /></p>
</form>

    <p>Don't have an account? Sign up <a href = "userform.php">here</a></p>
    
<?php include('footer.php'); ?>
</body>
</html>

