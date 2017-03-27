//don't look at me i'm not linked in anywhere


<?php include('authentication.php'); ?>
<?php $title = 'Edit User'; ?>
<?php $currentPage = 'Edit User'; ?>
<html>
<?php include('head.php'); ?>
<?php include('navbar-admin.php'); ?>
<body>
   
<form action="processing.php" method="post">
<p>First Name: <input type="text" name="fname" size="20" maxlength="50" /></p>
<p>Last Name: <input type="text" name="lname" size="20" maxlength="50" /></p>
<p>Email: <input type="text" name= "email" size="20" maxlength="50" /></p>
    <p>Phone: <input type="text" name = "phone" size = 20 maxlength = 50 /></p>
    <p>Password:<input type="password" name="password" maxlength="50" /></p>
<p><input type="submit" name="submit" value="Submit" /></p>
</form>
    
     <p>Already have an account? Sign in <a href = "index.php">here</a></p>
    <!--<a href = "output.php">check all records from database. </a>-->
    <?php include('footer.php'); ?>
</body>
</html>