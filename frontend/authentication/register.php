<?php include '../common/header.php'; ?>

<body style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('../images/background-img-login.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">
  
    <div class="content-card">
      <div class="register-card">
        <div class="text-center mb-5">
          <h1 class="brand-title">Aqua<span class=" mb-3 brand-highlight">Relief</span></h1>
          <p class="text-muted">Create your account to request relief and assistance.</p>
        </div>

        <form id="registrationForm">
          <div class="section-divider">Personal Information</div>
          <div class="row g-3 mb-4">
            <div class="col-md-8">
              <label class="form-label">Full Name</label>
              <input id="fullname" type="text" class="form-control" placeholder="Enter your full name" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">NIC Number</label>
              <input id="NIC" type="text" class="form-control" placeholder="e.g. 19XXXXXXXXXX" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Date of Birth</label>
              <input id="DOB" type="date" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Gender</label>
              <select id="gender" class="form-select" required>
                <option value="" selected disabled>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
            </div>
            
            <div class="section-divider">Permanent Address</div>
            <div class="row g-3 mb-4">
              <div class="col-12">
                <label class="form-label">Street Address</label>
                <input id="street_address" type="text" class="form-control" placeholder="House No, Street Name" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">City</label>
                <input id="city" type="text" class="form-control" placeholder="City" required>
              </div>
              <div class="col-md-4">
                <label class="form-label">District</label>
                <select id="district" class="form-select" required>
                  <option value="" selected disabled>Select District</option>
                  <option value="Colombo">Colombo</option>
                  <option value="Gampaha">Gampaha</option>
                  <option value="Kalutara">Kalutara</option>
                  <option value="Kandy">Kandy</option>
                  <option value="Matale">Matale</option>
                  <option value="Nuwara Eliya">Nuwara Eliya</option>
                  <option value="Galle">Galle</option>
                  <option value="Matara">Matara</option>
                  <option value="Hambantota">Hambantota</option>
                  <option value="Jaffna">Jaffna</option>
                  <option value="Kilinochchi">Kilinochchi</option>
                  <option value="Mannar">Mannar</option>
                  <option value="Vavuniya">Vavuniya</option>
                  <option value="Mullaitivu">Mullaitivu</option>
                  <option value="Anuradhapura">Anuradhapura</option>
                  <option value="Polonnaruwa">Polonnaruwa</option>
                  <option value="Kurunegala">Kurunegala</option>
                  <option value="Puttalam">Puttalam</option>
                  <option value="Batticaloa">Batticaloa</option>
                  <option value="Ampara">Ampara</option>
                  <option value="Trincomalee">Trincomalee</option>
                  <option value="Badulla">Badulla</option>
                  <option value="Moneragala">Moneragala</option>
                  <option value="Ratnapura">Ratnapura</option>
                  <option value="Kegalle">Kegalle</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Province</label>
                <select id="province" class="form-select" required>
                  <option value="" selected disabled>Select Province</option>
                  <option value="Western">Western</option>
                  <option value="Central">Central</option>
                  <option value="Southern">Southern</option>
                  <option value="Northern">Northern</option>
                  <option value="Eastern">Eastern</option>
                  <option value="North Western">North Western</option>
                  <option value="North Central">North Central</option>
                  <option value="Uva">Uva</option>
                  <option value="Sabaragamuwa">Sabaragamuwa</option>
                </select>
              </div>
            </div>
          </div>

          <div class="section-divider">Contact Information & Account Credentials</div>
          <div class="row g-3 mb-5">
            <div class="col-md-6">
              <label class="form-label">Email Address</label>
              <input id="email" type="email" class="form-control" placeholder="email@example.com" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Contact Number</label>
              <input id="contact_number" type="tel" class="form-control" placeholder="e.g. 07XXXXXXXX" pattern="[0-9]{10}" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">User Name</label>
              <input id="username" type="text" class="form-control" placeholder="Choose a username" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Password</label>
              <input id="password" type="password" class="form-control" placeholder="••••••••" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Confirm Password</label>
              <input id="confirm_password" type="password" class="form-control" placeholder="••••••••" required>
            </div>
          </div>

          <div class="text-center">
            <button type="button" class="btn btn-aqua px-5" onclick="registerUser()">Register Account</button>
            <p class="mt-4 small">
              Already have an account? <a href="./login.php"
                style="color: var(--primary-teal); font-weight: 700; text-decoration: none;">Sign In</a>
            </p>
          </div>
        </form>
      </div>
    </div>

<?php include '../common/footer.php'; ?>