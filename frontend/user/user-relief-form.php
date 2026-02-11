<?php
include '../common/header.php';
?>
<div class="navbar">
  <div class="logo">
    -AQUARELIEF-
  </div>
</div>

<div class="card" style="border-radius: 15px; box-shadow: 0 10px 5px var(--success); ">
  <h1 class="av-title">Flood Relief Request</h1>
  <hr class="av-dividerr">
  <h2>Request Details</h2>

  <form>
    <div class="form-group">
      <label> Type of Relief </label>
      <select required>
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
    <label> Type of Relief </label>
    <select id="type_of_relief" required>
      <option value="">Select</option>
      <option>Food</option>
      <option>Water</option>
      <option>Medicine</option>
      <option>Shelter</option>
    </select>
  </div>

    <div class="form-group">
      <label>GN Division</label>
      <input type="text" required>
    </div>
    <br>
    <hr class="av-dividerr">
    <h2>Household Details</h2>

  <div class="form-group">
    <label>Divisional Secretariat</label>
    <input type="text" id="devisional_secretariat" required>
  </div>

  <div class="form-group">
    <label>GN Division</label>
    <input type="text" id="gn_devision" required>
  </div>

  <h2>Household Details</h2>

  <div class="form-group">
    <label>Contact Person Name</label>
    <input type="text" id="contact_person_name" required>
  </div>

  <div class="form-group">
    <label>Contact Number</label>
    <input type="tel" id="contact_number" required>
  </div>

  <div class="form-group">
    <label>Address</label>
    <textarea id="address" required></textarea>
  </div>

  <div class="form-group">
    <label>Number of Family Members</label>
    <input type="number" id="num_of_family_members" min="1" required>
  </div>

  </form>
</div>
<?php
include '../common/footer.php';
?>


























<?php include '../common/footer.php'; ?>