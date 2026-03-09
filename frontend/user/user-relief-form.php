  <?php
  include 
    '../common/header.php';
  ?>

  <?php include './user-navbar.php';
  ?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
  <?php if(!isset($_SESSION["user_id"])) { ?>
  <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; min-height: 80vh; font-family: sans-serif;">
    
    <h1 style="color: #dc3545; font-size: 2.5rem; margin-bottom: 20px; letter-spacing: 2px;">
        ⚠️ LOGIN FIRST
    </h1>

    <video 
        src="../images/not-log-error-vid.mp4" 
        autoplay 
        muted 
        loop 
        style="width: 100%; max-width: 600px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
    </video>

</div>
<?php } else { ?>
   <div class="main-container">
    
    <div class="request-card">
        <div class="text-center mb-5">
          <h1 class="av-title">Request Relief</h1>
          <p class="av-subtitle">You are not alone. Tell us what you need, and we will connect you with available resources in your district.</p>
        </div>

        <div class="av-dividerr">Request Details</div>
        <div class="form-group">
          <label class="form-label"> Type of Relief </label>
          <select id="type_of_relief" name="type_of_relief" class="form-select" required>
            <option value="">-- Select --</option>
            <option>Food</option>
            <option>Water</option>
            <option>Medicine</option>
            <option>Shelter</option>
          </select>
        </div>
          <div class="form-group">
            <label class="form-label">District</label>
            <select id="district" name="district" class="form-select" required>
              <option value="">-- Select District --</option>
              <option value="Ampara">Ampara</option>
              <option value="Anuradhapura">Anuradhapura</option>
              <option value="Badulla">Badulla</option>
              <option value="Batticaloa">Batticaloa</option>
              <option value="Colombo">Colombo</option>
              <option value="Galle">Galle</option>
              <option value="Gampaha">Gampaha</option>
              <option value="Hambantota">Hambantota</option>
              <option value="Jaffna">Jaffna</option>
              <option value="Kalutara">Kalutara</option>
              <option value="Kandy">Kandy</option>
              <option value="Kegalle">Kegalle</option>
              <option value="Kilinochchi">Kilinochchi</option>
              <option value="Kurunegala">Kurunegala</option>
              <option value="Mannar">Mannar</option>
              <option value="Matale">Matale</option>
              <option value="Matara">Matara</option>
              <option value="Monaragala">Monaragala</option>
              <option value="Mullaitivu">Mullaitivu</option>
              <option value="Nuwara Eliya">Nuwara Eliya</option>
              <option value="Polonnaruwa">Polonnaruwa</option>
              <option value="Puttalam">Puttalam</option>
              <option value="Ratnapura">Ratnapura</option>
              <option value="Trincomalee">Trincomalee</option>
              <option value="Vavuniya">Vavuniya</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label">Divisional Secretariat Division</label>
            <input id="devisional_secretariat" type="text" class="form-control" required>
          </div>

          <div class="form-group">
            <label class="form-label">GN Division</label>
            <input id="gn_devision" type="text" class="form-control" required>
          </div>
          <br>
          <div class="av-dividerr">Household Details</div>
          <div class="form-group">
            <label class="form-label">Contact Person Name</label>
            <input id="contact_person_name" type="text" class="form-control" required>
          </div>

          <div class="form-group">
            <label class="form-label">Contact Number</label>
            <input id="contact_number" type="text" class="form-control" required>
          </div>

          <div class="form-group">
            <label class="form-label">Address</label>
            <textarea id="address" class="form-control" required></textarea>
          </div>

          <div class="form-group">
            <label class="form-label">Number of Family Members</label>
            <input  id ="num_of_family_members" type="number" min="1" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="form-label">Flood Severity Level</label>
            <select id="flood_level" class="form-select" required>
              <option value="">-- Select --</option>
              <option class="severity-low">Low</option>
              <option class="severity-medium">Medium</option>
              <option class="severity-high">High</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">Description / Special Requirements</label>
            <textarea id="description" class="form-control" placeholder="Mention any urgent or special needs"></textarea>
          </div>

          <button onclick="createReliefRequest()" type="button" class="btn btn-primary">Submit Request</button>

    </div>
  </div>

<?php } ?>
  
    
  <?php 
    include '../common/footer.php';
    include './user-footer.php';
   ?>
























