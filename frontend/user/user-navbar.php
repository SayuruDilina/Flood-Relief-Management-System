<?php
session_start();
?>


    <nav class="navbar navbar-expand-lg navbar-aqua sticky-top">
        <div class="container">
            <div class="brand-section">
                <a href="./home.php"><img src="../images/aquarelief-logo.png" alt="AquaRelief Logo" class="navbar-logo me-2">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#aquaNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="aquaNavbar">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="./home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user-relief-form.php">New Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./view-relief-request.php">My Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user-profile.php">Profile</a>
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
