<?php
    include "../common/header.php";
    ?>
<body style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('../images/background-img-login.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
    
    <div class="hn-content-card hn-forgot-card">

        <div class="text-center mb-5">
          <h2 class="hn-page-title">Forgot Password</h2>
          <p class="text-muted">Enter your details to reset your password</p>
        </div>



        <div class="hn-form-group">
            <label>Username</label>
            <input id="username" type="text" name="username"
                placeholder="Enter your username" required>
        </div>

        <div class="hn-form-group">
            <label>New Password</label>
            <input type="password" id="newPassword"
                name="new_password"
                placeholder="Enter new password"
                minlength="6" required>
        </div>

        <div class="hn-form-group">
            <label>Confirm Password</label>
            <input type="password" id="confirmPassword"
                name="confirm_password"
                placeholder="Confirm new password"
                minlength="6" required>
            <small id="passwordError" style="color:red; display:none;">
                Passwords do not match
            </small>
        </div>

        <div class="hn-form-group">
            <label>NIC Number</label>
            <input id="NIC" type="text" name="nic"
                placeholder="Enter your NIC" required>
        </div>

        <button onclick="forgotPassword()" type="button" class="hn-btn-primary rounded-pill px-5">
            Reset Password
        </button>



        <p class="hn-back-link">
            Remembered your password?
            <a style="" href="../authentication/login.php">Back to Login</a>
        </p>
    </div>

    
<?php
    include "../common/footer.php";
    ?>
