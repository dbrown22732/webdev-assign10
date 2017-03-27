<header class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if ($currentPage === 'Home') {echo 'class="active"';} ?>><a href="main_admin.php">Home</a></li>                    
                <li><a href="admin_records.php">Check all database records</a></li>
                <li><a href="delete.php">Delete a User from the Database</a></li>
                <li><a href="admin_pass_change.php">Change login password of a user</a></li>
                <li><a href="chg_phone.php">Change Phone Number</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</header>