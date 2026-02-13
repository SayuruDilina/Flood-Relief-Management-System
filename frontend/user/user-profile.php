<?php 
include '../common/header.php';
include './user-navbar.php';
?>

<div class="hn-body">
<div class="hn-content-card">

    <div class="hn-text-center hn-mb-4">
        <h1 class="hn-brand-title">
            Hiruni <span class="hn-brand-highlight">Kumarathunge
        </h1>
        <p class="hn-muted-text">Update your personal information</p>
    </div>

    <form id="profileForm" method="POST" action="update_profile.php">

    
        <div class="hn-section-divider">Personal Information</div>
        <div class="hn-row">

            <div class="hn-col-6">
                <label class="hn-label">Full Name</label>
                <input type="text" name="fullname"
                       class="hn-input"
                       value="Hiruni Kumarathunge" required>
            </div>

            <div class="hn-col-6">
                <label class="hn-label">NIC</label>
                <input id="NIC" type="text"
                       name="nic"
                       class="hn-input"
                       value="200371010267" required>
            </div>

            <div class="hn-col-6">
                <label class="hn-label">Date of Birth</label>
                <input id="DOB" type="date"
                       name="dob"
                       class="hn-input"
                       value="2003-07-28" required>
            </div>

            <div class="hn-col-6">
                <label class="hn-label">Gender</label>
                <select id="gender" name="gender"
                        class="hn-input" required>
                    <option disabled>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female" selected>Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

        </div>

        <div class="hn-section-divider">Permanent Address</div>
        <div class="hn-row">

            <div class="hn-col-6">
                <label class="hn-label">Street Address</label>
                <input type="text" name="street_address"
                       class="hn-input"
                       value="392/5, Pitipana South" required>
            </div>

            <div class="hn-col-6">
                <label class="hn-label">City</label>
                <input type="text" name="city"
                       class="hn-input"
                       value="Homagama" required>
            </div>

            <div class="hn-col-6">
                <label class="hn-label">District</label>
                <select name="district"
                        class="hn-select" required>
                    <option selected>Colombo</option>
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
                <select name="province"
                        class="hn-select" required>
                    <option selected>Western Province</option>
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
                <input type="email" name="email"
                       class="hn-input"
                       value="hiruni@gmail.com" required>
            </div>

            <div class="hn-col-6">
                <label class="hn-label">Contact Number</label>
                <input type="tel" name="contact_number"
                       class="hn-input"
                       value="0710525810" required>
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

    </form>

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

        <button type="submit"
                form="profileForm"
                class="hn-btn-primary rounded-pill px-5">
          Yes, Update
        </button>
      </div>

    </div>
  </div>
</div>

<?php 
include './user-footer.php';
include '../common/footer.php';
?>
