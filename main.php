<?php include('authentication.php'); ?>
<?php $title = 'Home'; ?>
<?php $currentPage = 'main'; ?>
<html>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>
<body>
    

<?php 
    $name = $_SESSION['fname'];
    echo "Hello, $name! What would you like to do?"; 
    ?>


    
<?php include('footer.php'); ?>
</body>
</html>