<?php
    include "../common/header.php";
    include "./admin-sidebar.php";
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
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="brand-text m-0">System <span>Reports</span></h2>
            <p class="text-muted small">Analyze relief distribution and user severity across regions.</p>
        </div>
        <button class="btn btn-outline-primary shadow-sm" onclick="window.print()">
            <i class="fas fa-file-export me-2"></i> Export PDF
        </button>
    </div>

    <div class="table-card p-4 mb-4 border-0 shadow-sm">
        <div class="row g-3 align-items-end">
            <div class="col-md-4">
                <label class="form-label small fw-bold text-muted">FILTER BY AREA</label>
                <select onchange="getReportFilterByArea()" id="district" class="form-select border-0 shadow-sm"  id="districtFilter">
                    <option value="">All Regions</option>
                    <option>Colombo</option>
                    <option>Gampaha</option>
                    <option>Kalutara</option>
                    <option>Kandy</option>
                    <option>Matale</option>
                    <option>Nuwara Eliya</option>
                    <option>Galle</option>
                    <option>Matara</option>
                    <option>Hambantota</option>
                    <option>Jaffna</option>
                    <option>Kilinochchi</option>
                    <option>Mannar</option>
                    <option>Vavuniya</option>
                    <option>Mullaitivu </option>
                    <option>Anuradhapura</option>
                    <option>Polonnaruwa</option>
                    <option>Kurunegala</option>
                    <option>Puttalam</option>
                    <option>Batticaloa</option>
                    <option>Ampara</option>
                    <option>Trincomalee </option>
                    <option>Badulla</option>
                    <option>Moneragala </option>
                    <option>Ratnapura</option>
                    <option>Kegalle </option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label small fw-bold text-muted">RELIEF TYPE</label>
                <select onchange="getReportFilterByRelief()" class="form-select border-0 shadow-sm" id="reliefFilter">
                    <option value="">All Requests</option>
                    <option>Food</option>
                    <option>Water</option>
                    <option>Medicine</option>
                    <option>Shelter</option>
                </select>
            </div>
            <div class="col-md-4">
                <button  type="button" class="btn btn-primary w-100 fw-bold py-2">
                    Generate Filtered Report
                </button>
            </div>
</div>
    </div>

    <div class="row g-3 mb-5">
        <div class="col-md-2">
            <div class="metric-card text-center border-start border-primary border-4">
                <div class="small text-muted fw-bold mb-1">Total Users</div>
                <div  class="metric-value" id="totalUsers">125</div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="metric-card text-center border-start border-danger border-4">
                <div class="small text-muted fw-bold mb-1">High Severity</div>
                <div class="metric-value text-danger" id="highSeverity">42</div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="metric-card text-center border-start border-info border-4">
                <div class="small text-muted fw-bold mb-1">Food Requests</div>
                <div class="metric-value" style="color: #3498db;" id="foodCount">60</div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="metric-card text-center border-start border-success border-4">
                <div class="small text-muted fw-bold mb-1">Water Requests</div>
                <div class="metric-value" style="color: var(--success);" id="waterCount">0</div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="metric-card text-center border-start border-warning border-4">
                <div class="small text-muted fw-bold mb-1">Medicine Requests</div>
                <div class="metric-value" style="color:#f39c12;" id="medicineCount">0</div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="metric-card text-center border-start border-text-dark border-4">
                <div class="small text-muted fw-bold mb-1">Shelter Requests</div>
                <div class="metric-value" style="color:#4a4a4a;"id="shelterCount">0</div>
            </div>
        </div>
    </div>

    <div class="table-card shadow-sm p-4">
        <h5 class="fw-bold mb-4">Detailed Record Summary</h5>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>User ID</th>
                        <th>Name</th>
                        <th>Area</th>
                        <th>Request Type</th>
                        <th>Severity</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody id="reportTable">

<tr data-district="Colombo" data-relief="Food" data-severity="High">
    <td>#AQ-1092</td>
    <td><strong>Akeesha Piyadasa</strong></td>
    <td>Colombo</td>
    <td>Food</td>
    <td><span class="badge bg-danger">High</span></td>
    <td class="text-end">
        <a href="#" class="btn btn-sm btn-outline-primary rounded-pill px-3">
            View Report
        </a>
    </td>
</tr>

<tr data-district="Galle" data-relief="Water" data-severity="Medium">
    <td>#AQ-2045</td>
    <td><strong>Sayuru Dilina</strong></td>
    <td>Galle</td>
    <td>Water</td>
    <td><span class="badge bg-warning">Medium</span></td>
    <td class="text-end">
        <a href="user_report.html?id=1092" class="btn btn-sm btn-outline-primary rounded-pill px-3">
            View Report
        </a>
    </td>
</tr>

</tbody>

            </table>
        </div>
    </div>
</main>
<?php } ?>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const districtFilter = document.getElementById("districtFilter");
    const reliefFilter = document.getElementById("reliefFilter");
   
    
    districtFilter.addEventListener("change", function () {

        if (districtFilter.value !== "") {
            reliefFilter.value = "";   
            reliefFilter.disabled = true;
        } else {
            reliefFilter.disabled = false;
        }

       
    });

    reliefFilter.addEventListener("change", function () {

        if (reliefFilter.value !== "") {
             districtFilter.value = ""; 
            districtFilter.disabled = true;
        } else {
            districtFilter.disabled = false;
        }


    });

 
});
</script> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php
    include "../common/footer.php";
    ?>