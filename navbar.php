<header class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if ($currentPage === 'Home') {echo 'class="active"';} ?>><a href="main.php">Home</a></li>
                <li><a href="chg_phone.php">Change Phone Number</a></li>
                <li><a href="chg_email.php">Change Email</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</header>