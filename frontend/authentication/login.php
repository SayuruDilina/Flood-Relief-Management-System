<?php include '../common/header.php'; 
?>

<body style="linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('../images/background-img-login.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">

  <div class="content-card">
    <div class="login-card">
      <div class="mb-4 text-center">
        <h1 class="brand-title">Aqua<span class="mb-3 brand-highlight">Relief</span></h1>
                <p class="brand-subtitle">The Flood Relief Management System</p>
      </div>

      <form>
        <div class="mb-3">
          <label class="form-label fw-semibold">Username</label>
          <input id="username" type="text" class="form-control" placeholder="Enter your username">
        </div>

        <div class="mb-4">
          <label class="form-label fw-semibold">Password</label>
          <input id="password" type="password" class="form-control" placeholder="••••••••••">
          <div class="text-end mt-2">
            <a href="../user/user-password-forgot.php" class="small create-link">Forgot Password?</a>
          </div>
        </div>

        <button onclick="login()" type="button" class="btn btn-aqua w-100 mb-3">Sign In</button>

        <div class="text-center mt-3">
          <p class="small text-muted">Impacted by floods? <br>
            <a href="./register.php" class="create-link">Request Immediate Assistance</a>
          </p>
        </div>
      </form>
    </div>
  </div>

<?php include '../common/footer.php'; 
?>