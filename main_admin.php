<?php include('authentication.php'); ?>

<?php $title = 'Home'; ?>
<?php $currentPage = 'main_admin'; ?>
<html>
<?php include('head.php'); ?>
<?php include('navbar-admin.php'); ?>
<body>
    
<?php 
    $name = $_SESSION['fname'];
    echo "Welcome to the wonderland, $name! What would you like to do?";
    ?>   


    
<?php include('footer.php'); ?>
</body>
</html>