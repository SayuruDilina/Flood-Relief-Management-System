<?php
include '../common/header.php';
?>

<div class="navbar">
  <div class="logo">
    -AQUARELIEF-
  </div>
</div>

<div class="card" style="border-radius: 15px;">
  <h1>Flood Relief Request</h1>

 <form >

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
    <label>District</label>
    <input type="text" id="district" required>
  </div>

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

  <div class="form-group">
    <label>Flood Severity Level</label>
    <select id="flood_level" required>
      <option value="">Select</option>
      <option value="Low" class="severity-low">Low</option>
      <option value="Medium" class="severity-medium">Medium</option>
      <option value="High" class="severity-high">High</option>
    </select>
  </div>

  <div class="form-group">
    <label>Description / Special Requirements</label>
    <textarea id="description" placeholder="Mention any urgent or special needs"></textarea>
  </div>

  <button  onclick="createReliefRequest()" type="button" class="btn btn-primary">
    Submit Relief Request
  </button>

</form>




























  <?php include '../common/footer.php'; ?>