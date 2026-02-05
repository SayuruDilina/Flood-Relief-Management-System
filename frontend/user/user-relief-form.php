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
      <input type="text" required>
    </div>

    <div class="form-group">
      <label>Divisional Secretariat</label>
      <input type="text" required>
    </div>

    <div class="form-group">
      <label>GN Division</label>
      <input type="text" required>
    </div>
    <h2>Household Details</h2>

    <div class="form-group">
      <label>Contact Person Name</label>
      <input type="text" required>
    </div>

    <div class="form-group">
      <label>Contact Number</label>
      <input type="tel" required>
    </div>

    <div class="form-group">
      <label>Address</label>
      <textarea required></textarea>
    </div>

    <div class="form-group">
      <label>Number of Family Members</label>
      <input type="number" min="1" required>
    </div>
    <div class="form-group">
      <label>Flood Severity Level</label>
      <select required>
        <option value="">Select</option>
        <option class="severity-low">Low</option>
        <option class="severity-medium">Medium</option>
        <option class="severity-high">High</option>
      </select>
    </div>
    <div class="form-group">
      <label>Description / Special Requirements</label>
      <textarea placeholder="Mention any urgent or special needs"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">
      Submit Relief Request
    </button>




  </form>




























  <?php include '../common/footer.php'; ?>