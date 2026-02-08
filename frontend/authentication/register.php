<?php include '../common/header.php'; 
?>

<body style="linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('../images/background-img-login.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">

  <div class="content-card">
    <div class="register-card">
      <div class="text-center mb-5">
        <h1 class="brand-title">Aqua<span class=" mb-3 brand-highlight">Relief</span></h1>
        <p class="text-muted">Create your account to request relief and assistance.</p>
      </div>

      <form action="#" method="POST">
        <div class="section-divider">Personal Information</div>
        <div class="row g-3 mb-4">
          <div class="col-md-8">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" placeholder="Enter your full name">
          </div>
          <div class="col-md-4">
            <label class="form-label">NIC Number</label>
            <input type="text" class="form-control" placeholder="e.g. 19XXXXXXXXXX">
          </div>
          <div class="col-md-6">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control">
          </div>
          <div class="col-md-6">
            <label class="form-label">Gender</label>
            <select class="form-select">
              <option selected disabled>Select Gender</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="section-divider">Permanent Address</div>
          <div class="row g-3 mb-4">
            <div class="col-12">
              <label class="form-label">Street Adress</label>
              <input type="text" class="form-control" placeholder="House No, Street Name">
            </div>
            <div class="col-md-4">
              <label class="form-label">City</label>
              <input type="text" class="form-control" placeholder="City">
            </div>
            <div class="col-md-4">
              <label class="form-label">District</label>
              <select class="form-select">
                <option selected disabled>Select District</option>
                <option>Colombo</option>
                <option>Gampaha</option>
                <option>Kalutara</option>
                <option>Kandy</option>
                <option>Matale</option>
                <option>Nuwara Eliya</option>
                <option>Galle</option>
                <option>Matara</option>
                <option>Hambantota</option>
                <option>Jaffna</option>
                <option>Kilinochchi</option>
                <option>Mannar</option>
                <option>Vavuniya</option>
                <option>Mullaitivu </option>
                <option>Anuradhapura</option>
                <option>Polonnaruwa</option>
                <option>Kurunegala</option>
                <option>Puttalam</option>
                <option>Batticaloa</option>
                <option>Ampara</option>
                <option>Trincomalee </option>
                <option>Badulla</option>
                <option>Moneragala </option>
                <option>Ratnapura</option>
                <option>Kegalle </option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label">Province</label>
              <select class="form-select">
                <option selected disabled>Select Province</option>
                <option>Western</option>
                <option>Central</option>
                <option>Southern</option>
                <option>Northern</option>
                <option>Eastern</option>
                <option>North Western</option>
                <option>North Central</option>
                <option>Uva</option>
                <option>Sabaragamuwa</option>
              </select>
            </div>
          </div>
        </div>

        <div class="section-divider">Contact Information & Account Credentials</div>
        <div class="row g-3 mb-5">
          <div class="col-md-6">
            <label class="form-label">Email Adress</label>
            <input type="email" class="form-control" placeholder="email@example.com">
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Contact Number</label>
            <input type="tel" class="form-control" placeholder="e.g. 07XXXXXXXX" pattern="[0-9]{10}" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">User Name</label>
            <input type="text" class="form-control" placeholder="Choose a username">
          </div>
          <div class="col-md-6">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="••••••••">
          </div>
          <div class="col-md-6">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" placeholder="••••••••">
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-aqua px-5">Register Account</button>
          <p class="mt-4 small">
            Already have an account? <a href="login.php"
              style="color: var(--primary-teal); font-weight: 700; text-decoration: none;">Sign In</a>
          </p>
        </div>
      </form>
    </div>
  </div>

<?php include '../common/footer.php'; 
?>