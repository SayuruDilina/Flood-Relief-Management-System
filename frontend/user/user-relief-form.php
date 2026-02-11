  <?php
  include 
    '../common/header.php';
  ?>

  <?php include './user-navbar.php';
  ?>
  
  <div class="card" style="border-radius: 15px; box-shadow: 0 10px 5px var(--success); ">
    <h1 class="av-title">Flood Relief Request</h1>
    <hr class="av-dividerr">
    <h2>Request Details</h2>

    <div>
      <div class="form-group">
        <label> Type of Relief </label>
        <select id="type_of_relief" name="type_of_relief" required>
          <option value="">Select</option>
          <option>Food</option>
          <option>Water</option>
          <option>Medicine</option>
          <option>Shelter</option>
        </select>
      </div>
      <div class="form-group">
        <label>District</label>
        <select id="district" name="district" required>
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
        <label>Divisional Secretariat</label>
        <input id="devisional_secretariat" type="text" required>
      </div>

      <div class="form-group">
        <label>GN Division</label>
        <input id="gn_devision" type="text" required>
      </div>
      <br>
      <hr class="av-dividerr">
      <h2>Household Details</h2>

      <div class="form-group">
        <label>Contact Person Name</label>
        <input id="contact_person_name" type="text" required>
      </div>

      <div class="form-group">
        <label>Contact Number</label>
        <input id="contact_number type" type="text" required>
      </div>

      <div class="form-group">
        <label>Address</label>
        <textarea id="address"  required></textarea>
      </div>

      <div class="form-group">
        <label>Number of Family Members</label>
        <input  id ="num_of_family_members" type="number" min="1" required>
      </div>
      <div class="form-group">
        <label>Flood Severity Level</label>
        <select id="flood_level" required>
          <option value="">Select</option>
          <option class="severity-low">Low</option>
          <option class="severity-medium">Medium</option>
          <option class="severity-high">High</option>
        </select>
      </div>
      <div class="form-group">
        <label>Description / Special Requirements</label>
        <textarea id="description" placeholder="Mention any urgent or special needs"></textarea>
      </div>

      <button onclick="createReliefRequest()" type="button" class="btn btn-primary">
        Submit Relief Request
      </button>




  </div>
  </div>
  
  <?php 
    include '../common/footer.php';
    include './user-footer.php';
   ?>
























