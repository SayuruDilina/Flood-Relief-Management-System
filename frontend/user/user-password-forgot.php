<?php
    include "../common/header.php";
    include "./user-navbar.php";
    ?>

    <div class="hn-content-card hn-forgot-card">

        <h2 class="hn-page-title">Forgot Password</h2>
        <p class="hn-subtitle">
            Enter your details to reset your password
        </p>

        <form>

    <div class="hn-form-group">
        <label>Username</label>
        <input type="text" name="username"
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
        <input type="text" name="nic"
               placeholder="Enter your NIC" required>
    </div>

    <button type="submit" class="hn-btn-primary rounded-pill px-5">
        Reset Password
    </button>

</form>

        <p class="hn-back-link">
            Remembered your password?
            <a href="login.html">Back to Login</a>
        </p>

    </div>

    
<?php
    include "../common/footer.php";
    include "./user-footer.php";
    ?>
