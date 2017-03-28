<?php $title = 'Register'; ?>
<?php $currentPage = 'userform'; ?>
<html>
<?php include('head.php'); ?>
<body>
   <h3 class = frontpage>Register an account</h3>
    <div class = container-fluid>
    <form action="userform.php" method="post">
<p>First Name: <input type="text" name="fname" size="20" maxlength="50" /></p>
<p>Last Name: <input type="text" name="lname" size="20" maxlength="50" /></p>
<p>Email: <input type="text" name= "email" size="20" maxlength="50" /></p>
    <p>Phone: <input type="text" name = "phone" size = 20 maxlength = 50 /></p>
    <p>Password:<input type="password" name="password" maxlength="50" /></p>
<p><input type="submit" name="submit" value="Submit" /></p>
</form>
    </div>
    <p></p>

    
     <p class = frontpage>Already have an account? Sign in <a href = "index.php">here</a></p>
    <!--<a href = "output.php">check all records from database. </a>-->
    <p></p>
    <?php include('footer.php'); ?>
</body>
</html>

<?php include('processing.php'); ?>