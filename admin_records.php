<?php include('authentication.php'); ?>
<?php $title = 'Admin Database'; ?>
<?php $currentPage = 'admin_records'; ?>
<html>
<?php include('head.php'); ?>
<?php include('navbar-admin.php'); ?>

<body>

<?php
include('connection.php');
    
    //code for grabbing database goes here

$query ="SELECT * FROM users ";
$r = mysqli_query($dbc, $query);
    
    echo "<table>";
while ($row = mysqli_fetch_array($r)){
echo "

<tbody>
    <tr>
        <td style='padding: 10px; border-bottom: 1px solid #aad;'><a href = 'edit.php?email=".$row['email']."'>Edit </a></td>
        <td style='padding: 10px; border-bottom: 1px solid #aad;'><a href = 'deletebyID.php?id=" .$row['Id']."'>Delete </a></td>
        <td style='padding: 10px; border-bottom: 1px solid #aad;'>".$row['email']. "</td>
        <td style='padding: 10px; border-bottom: 1px solid #aad;'>".$row['first_name']. "</td>
        <td style='padding: 10px; border-bottom: 1px solid #aad;'>".$row['last_name']. "</td>
        <td style='padding: 10px; border-bottom: 1px solid #aad;'>".$row['phone']. "</td>
        <td style='padding: 10px; border-bottom: 1px solid #aad;'><a href = 'deletebyID.php?id=" .$row['Id']."'>Delete By ID </a></td>
    </tr>
</tbody>";

}
echo "</table>";

?>
    
<?php include('footer.php'); ?>
</body>
</html>