<?php
  include "../common/header.php";
  include "../common/footer.php";
  include "./admin-sidebar.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
  <div>
    <h2 class="brand-text m-0">Emergency <span class="text-primary">Alerts</span></h2>
    <p class="small text-muted">Update emergency alerts for your users.</p>
  </div>
  <hr class="divider">
  
  <div class="row g-4">
        <div class="col-lg-6">
          <div class="card alert-card shadow-sm p-4 h-100">
                <h5 class="fw-bold mb-4">Update Home Page Banner</h5>
                
                <div action="#" method="POST">
                    <div class="mb-4">
                        <label class="form-label small fw-bold text-muted">EMERGENCY ALERT MESSAGE</label>
                        <textarea id="alert_msg" maxlength="250" class="form-control border bg-light" name="alert_msg" rows="4" 
                        style="border-radius: 10px;" placeholder="Type the emergency alert message..."></textarea>
                    </div>

                    <button onclick="addAlert()" type="button" class="btn alert-btn w-100 fw-bold py-3 text-white">
                        <i class="fas fa-bullhorn me-2"></i> UPDATE ALERT
                    </button>
</div>
          </div>
        </div>

        <div class="col-lg-6">
            <div class="card preview-card shadow-sm p-4 mb-0 h-100">
                <h5 class="fw-bold mb-3">Live Preview</h5>
                <div class="alert-preview p-3 shadow-sm border border-danger d-flex align-items-center">
                  <i class="fas fa-exclamation-triangle text-danger me-3 fs-4"></i>
                <strong>Emergency Alert:&nbsp;</strong><span id="alert_preview">Preview emergency alert here...</span>
                </div>
                <div class="mt-auto pt-3 border-top">
                  <div class="d-flex small text-muted">
                      <span><i class="fas fa-desktop"></i>&nbsp;Visibility: <strong>All Users</strong></span>
                  </div>
                </div>
            </div>
        </div>  
  </div>

  <div class="row mt-4">
    <div class="col-12">
      <div class="card previous-card shadow p-4">
                <h5 class="fw-bold mb-4">Previous Alerts</h5>
                <div class="table-responsive">
                  <table class="table alert-table table-sm text-muted">
                      <thead>
                          <tr>
                              <th>Date</th>
                              <th>Message</th>
                              <th>Status</th>
                              <th>Actions</th>
                          </tr>
                      </thead>
                      <tbody id="alertTable">
                          <tr class="table-light">
                              <td class="text-nowrap">13/03/2026</td>
                              <td class="text-overflow">Heavy rainfall expected in Western Province.</td>
                              <td>
                                  <span class="badge rounded-pill text-bg px-3">Active</span>
                              </td>
                              <td>
                                                              <button type="submit" name="action" value="deactivate" class="btn btn-stop">Stop
                                    
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
    </div>
  </div>
</main>

<script>
    const alertInput = document.getElementById('alert_msg');
    const livePreviewText = document.getElementById('alert_preview');

    alertInput.addEventListener('input', function() {
        livePreviewText.innerText = this.value;
        if (this.value.trim() === "") {
            livePreviewText.innerText = "Preview emergency alert here...";
        }
    });

   document.addEventListener("DOMContentLoaded", () => {
       viewAlerts();
    })
    

  



</script>