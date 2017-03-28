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
    include("connection.php");
    $query ="SELECT * FROM users WHERE email='".$_SESSION['email']."'";
$r = mysqli_query($dbc, $query);
    
    echo "<table>";
while ($row = mysqli_fetch_array($r)){
echo "

<tbody>
    <tr>

        <td style='padding: 10px; border-bottom: 1px solid #aad;'>".$row['email']."</td>
        <td style='padding: 10px; border-bottom: 1px solid #aad;'>".$row['first_name']."</td>
        <td style='padding: 10px; border-bottom: 1px solid #aad;'>".$row['last_name']."</td>
        <td style='padding: 10px; border-bottom: 1px solid #aad;'>".$row['phone']."</td>
    </tr>
</tbody>";

}
echo "</table>";


    ?>


    
<?php include('footer.php'); ?>
</body>
</html>