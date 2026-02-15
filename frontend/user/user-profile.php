<?php 
include '../common/header.php';
include './user-navbar.php';
?>

    <?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
  <?php if(!isset($_SESSION["user_id"])) { ?>
  <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-right: 30%; text-align: center; min-height: 80vh; font-family: sans-serif;">
    
    <h1 style="  margin-right: 30%; color: #dc3545; font-size: 2.5rem; margin-bottom: 20px; letter-spacing: 2px;">
        ⚠️ LOGIN FIRST
    </h1>

    <video 
        src="../images/not-log-error-vid.mp4" 
        autoplay 
        muted 
        loop 
        style="  margin-right: 30%; width: 100%; max-width: 600px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
    </video>

</div>
<?php } else { ?>
<div class="hn-body">
<div class="hn-content-card">

    <div class="hn-text-center hn-mb-4">
        <h1 id="hn-brand-title" class="hn-brand-title" class="hn-brand-highlight">
            Hiruni Kumarathunge
        </h1>
        <p class="hn-muted-text">Update your personal information</p>
    </div>

    <div id="profileForm" >

    
        <div class="hn-section-divider">Personal Information</div>
        <div class="hn-row">

            <div class="hn-col-6">
                <label class="hn-label">Full Name</label>
                <input id="fullname" type="text" name="fullname"
                       class="hn-input"
                       placeholder="Full Name" required>
            </div>

            <div class="hn-col-6">
                <label class="hn-label">NIC</label>
                <input id="NIC" id="NIC" type="text"
                       name="nic"
                       class="hn-input"
                       placeholder="NIC" required>
            </div>

            <div class="hn-col-6">
                <label class="hn-label">Date of Birth</label>
                <input  id="DOB" type="date"
                       name="dob"
                       class="hn-input"
                       placeholder="Date of Birth" required>
            </div>

            <div class="hn-col-6">
                <label class="hn-label">Gender</label>
                <select id="gender" name="gender"
                        class="hn-input" required>
                    <option enabled>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

        </div>

        <div class="hn-section-divider">Permanent Address</div>
        <div class="hn-row">

            <div class="hn-col-6">
                <label class="hn-label">Street Address</label>
                <input id="street_address" type="text" name="street_address"
                       class="hn-input"
                       placeholder="Street Address" required>
            </div>

            <div class="hn-col-6">
                <label class="hn-label">City</label>
                <input id="city" type="text" name="city"
                       class="hn-input"
                       placeholder="City" required>
                       
            </div>

            <div class="hn-col-6">
                <label class="hn-label">District</label>
                <select id="district" name="district" 
                        class="hn-select" required>
                         <option enabled>Select District</option>
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

            <div class="hn-col-6">
                <label class="hn-label">Province</label>
                <select id="province" name="province"
                        class="hn-select" required>
                         <option enabled>Select Province</option>
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

        <div class="hn-section-divider">Contact Information</div>
        <div class="hn-row">

            <div class="hn-col-6">
                <label class="hn-label">Email</label>
                <input id="email" type="email" name="email"
                       class="hn-input"
                       placeholder="Email" required>
            </div>

            <div class="hn-col-6">
                <label class="hn-label">Contact Number</label>
                <input id="contact_number" type="tel" name="contact_number"
                       class="hn-input"
                       placeholder="Contact Number" required>
            </div>

        </div>

        <div class="hn-mt-4 text-center">
            <button type="button"
                    class="hn-btn-primary-main rounded-pill px-5"
                    data-bs-toggle="modal"
                    data-bs-target="#updateProfileModal">
                Update Profile
            </button>
        </div>

</div>

</div>
</div>

<div class="modal fade" id="updateProfileModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content hn-modal-content">

      <div class="modal-header hn-modal-header">
        <h5 class="modal-title">Confirm Profile Update</h5>
        <button type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body hn-modal-body text-center">
        <p>Are you sure you want to update your profile details?</p>
      </div>

      <div class="modal-footer hn-modal-footer">
        <button type="button"
                class="hn-btn-secondary rounded-pill px-5"
                data-bs-dismiss="modal">
          No, Cancel
        </button>

        <button  onclick="updateProfile()" type="button"
                form="profileForm"
                class="hn-btn-primary rounded-pill px-5">
          Yes, Update
        </button>
      </div>

    </div>
  </div>
</div>

<?php } ?>
<?php 
include './user-footer.php';
include '../common/footer.php';
?>
