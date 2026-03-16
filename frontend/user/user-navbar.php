<?php
session_start();

$current_page = basename($_SERVER['PHP_SELF']);
?>


    <nav class="navbar navbar-expand-lg navbar-aqua sticky-top">
        <div class="container">
            <div class="brand-section">
                <a href="./home.php"><img src="../images/aquarelief-logo.png" alt="AquaRelief Logo" class="navbar-logo me-2">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="aquaNavbar">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'home.php') ? 'active' : ''; ?>" href="./home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'user-relief-form.php') ? 'active' : ''; ?>" href="./user-relief-form.php">New Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'view-relief-request.php') ? 'active' : ''; ?>" href="./view-relief-request.php">My Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($current_page == 'user-profile.php') ? 'active' : ''; ?>" href="./user-profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <?php if(isset($_SESSION["user_id"])) { ?>
    <a id="loginSignout" class="nav-link btn-signin" onclick="logOut()">Logout</a>
<?php } else { ?>
    <a id="loginSignout" class="nav-link btn-signin" href="../authentication/login.php">Sign In</a>
<?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
