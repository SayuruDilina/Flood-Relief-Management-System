          <nav class="navbar">
        <div class="logo">-AQUARELIEF-</div>
    </nav>

    <div class="hn-content-card">

        <h2 class="page-title">My Relief Requests</h2>

        <div class="hn-card-container">

            <div class="relief-card">
                <div class="card-header">
                    <span class="relief-type">Food</span>
                    <span class="status high">High</span>
                </div>

                <div class="card-body">
                    <p>District: Colombo</p>
                    <p>Divisional Secretariat: Homagama</p>
                    <p>GN Division: Pitipana South</p>
                    <p>Family Members: 5</p>
                    <p class="description">Description: Need food and drinking water urgently.</p>
                </div>

                <div class="card-actions">

<button type="button" class="btn btn-primary rounded-pill px-5"
        data-bs-toggle="modal"
        data-bs-target="#editModal">
  Edit
</button>

<div class="modal fade" id="editModal" tabindex="-1"
     aria-labelledby="editModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header custom-header">
        <h5 class="modal-title" id="editModalLabel">
          Edit Relief Request
        </h5>
        <button type="button" class="btn-close btn-close-white"
                data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form>

         <h6 class="section-title fw-bold mb-3">
            Request Details
          </h6>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label fw-bold">ID</label>
              <input type="text" class="form-control" id="id">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-bold">Relief Type</label>
              <input type="text" class="form-control" id="relief-type">
            </div>

          </div>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label fw-bold">District</label>
              <input type="text" class="form-control" id="district">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-bold">Divisional Secretariat</label>
              <input type="text" class="form-control" id="divisional-secretariat">
            </div>

          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">GN Division</label>
            <input type="text" class="form-control" id="gn-division">
          </div>

          <hr>

          <h6 class="section-title fw-bold mb-3">
            Household Details
          </h6>

          <div class="row">

            <div class="col-md-6 mb-3">
              <label class="form-label fw-bold">Contact Person Name</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label fw-bold">Contact Number</label>
              <input type="text" class="form-control">
            </div>

          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Address</label>
            <input type="text" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">No of Family Members</label>
            <input type="number" class="form-control">
          </div>

          <hr>

          <h6 class="section-title fw-bold mb-3">
            Flood Severity Level
          </h6>

          <div class="mb-3">
            <label class="form-label fw-bold">Level</label>
            <select class="form-select">
              <option selected>Select Severity</option>
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label fw-bold">Description</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>

        </form>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-primary rounded-pill px-5" style=background-color:#4F4F4F; data-bs-dismiss="modal">
          Cancel
        </button>

        <button type="button" class="btn btn-primary rounded-pill px-5">
          Save Changes
        </button>

      </div>

    </div>
  </div>
</div>

<button type="button" class="btn btn-danger rounded-pill px-5"
        data-bs-toggle="modal"
        data-bs-target="#deleteModal">
  Delete
</button>

<div class="modal fade" id="deleteModal" tabindex="-1"
     aria-labelledby="deleteModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="deleteModalLabel">
          Confirm Delete
        </h5>
        <button type="button" class="btn-close"
                data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body text-center">
        <p style="font-size:18px;">
          Are you sure you want to delete this relief request?
        </p>
        <p class="text-muted">
          This action cannot be undone.
        </p>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary rounded-pill px-5"
                data-bs-dismiss="modal" style=background-color:#4F4F4F;>
          No
        </button>

        <button type="button" class="btn btn-danger rounded-pill px-5">
          Yes, Delete
        </button>

      </div>

    </div>
  </div>
</div>

                </div>
            </div>

        </div>

    </div>

<script>
    const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `New message to ${recipient}`
    modalBodyInput.value = recipient
  })
}
</script>

<?php
include "../common/header.php";
include "../common/footer.php";
?>
