  
  <?php include './user-navbar.php';
  ?>

<body style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('../images/bg-img-04.jpg'); background-size: cover; background-position: center; background-attachment: fixed;">

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
    <div class="view-request-card">

      <h2 class="page-title">My Relief Requests</h2>
      
      <div id="reliefRContainer">
        <div class="relief-card">
          <div class="card-header">
              <span class="relief-type">Food</span>
                <span class="status">Pending</span>
              <span  id="flood_level" class="status high">High</span>
          </div>

          <div class="card-body">
              <p>District: Colombo</p>
              <p>Divisional Secretariat: Homagama</p>
              <p>GN Division: Pitipana South</p>
              <p>Family Members: 5</p>
              <p class="description">Description: Need food and drinking water urgently.</p>
          </div>

          <div class="card-actions">

            <button type="button" class="btn-editr"
                    data-bs-toggle="modal"
                    data-bs-target="#editModal">
              Edit
            </button>

            <button type="button" class="btn-deleter"
                    data-bs-toggle="modal"
                    data-bs-target="#deleteModal">
              Delete
            </button>

          </div>

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

                  <button type="button" class="btn btn-primary rounded-pill px-5" style="background-color:#4F4F4F;" data-bs-dismiss="modal">
                    Cancel
                  </button>
 
                  <button type="button" class="btn btn-primary rounded-pill px-5">
                    Save Changes
                  </button>

                </div>

              </div>
            </div>
          </div>


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
<?php } ?>
  <?php include './user-footer.php';
   ?>

<script>
    const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
   
    const button = event.relatedTarget
   
    const recipient = button.getAttribute('data-bs-whatever')
    
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `New message to ${recipient}`
    modalBodyInput.value = recipient
  })
}

 document.addEventListener("DOMContentLoaded", () => {
         
          getAllReliefRequestSpecificUser();
    })
</script>

<?php
include "../common/header.php";
include "../common/footer.php";
?>
