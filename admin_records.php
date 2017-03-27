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
        <td align = 'left'><a href = 'edit.html?email=".$row['email']."'>Edit</a></td>
        <td align = 'left'><a href = 'delete.html?id=" .$row['Id']."'>Delete</a></td>
        <td align = 'left'>".$row['email']."</td>
        <td align = 'left'>".$row['first_name']."</td>
        <td align = 'left'>".$row['last_name']."</td>
        <td align = 'left'>".$row['phone']."</td>
        <td align = 'left'><a href = 'delete.php?id=" .$row['Id']."'>Delete By ID</a></td>
        <td align = 'left'>".$row['user_type']."</td>
    </tr>
</tbody>";

}
echo "</table>";

?>
    
<?php include('footer.php'); ?>
</body>
</html>