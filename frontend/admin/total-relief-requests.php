

    <?php include './admin-sidebar.php';
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
    <main class="hn-main col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        <div>
            <h2 class="brand-text m-0">Relief <span class="text-primary">Requests</span></h2>
            <p class="text-muted small">All relief requests across the region.</p>
        </div>
        <hr class="h-divider">

        <div class="row g-4 mb-5 hn-top-row">
            <div class="col-md-4">
                <div class="hn-summary-card text-center">
                    <h3 class="hn-topic">Total Relief Requests</h3>
                    <div id="totalRequests" class="hn-total">01</div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="hn-priority-card">
                    <h3 class="hn-topic mb-3">Severity Breakdown</h3>
                    
                    <div class="mb-3">
                        <div class="d-flex justify-content-between small fw-bold mb-1">
                            <span>High Severity</span>
                            <span  id="highSeverityBar"  class="text-danger">65%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div  id="highSeverityBarWidth" class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="d-flex justify-content-between small fw-bold mb-1">
                            <span>Medium Severity</span>
                            <span id="mediumSeverity" class="text-warning">25%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div id="mediumSeverityBar" class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="d-flex justify-content-between small fw-bold mb-1">
                            <span>Low Severity</span>
                            <span id="lowSeverity" class="text-success">10%</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div  id="lowSeverityBar"  class="progress-bar bg-success" role="progressbar" style="width: 10%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="hn-calendar-card text-center">
                    <h3 class="hn-topic">Today</h3>

                    <div class="hn-calendar-today">
                    
                        <div class="hn-today-box">
                            <div id="today-day" class="hn-today-day"></div>
                            <div id="today-date" class="hn-today-date"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hn-table-card">
            <h5 class="fw-bold">All Relief Requests</h5>

            <div class="hn-search-card">
                <div class="search-wrapper">
                    <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                    <input 
                    id="search-nic"
                        type="text" 
                        class="hn-search-input" 
                        placeholder="Search by nic...">
                    <button onclick="searchRequestByNIC()" class="btn-search">
                        Search</button>    
                </div>
        </div>

            <div class="hn-table-wrapper">
            <table class="hn-table table-hover">
                <thead>
                    <tr>
                            <th>Relief Type</th>
                            <th>Severity Level</th>
                            <th>Divisional Secretariat</th>
                            <th>GN Division</th>
                            <th>Contact Person</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>No Of Family Members</th>
                            <th>Description</th>
                            <th>District</th>
                            <th>Current Status</th>
                            <th>Created At</th>
                            <th>NIC</th>
                            <th>Approve</th>
                            <th>Reject</th>
                    </tr>
                </thead>
                <tbody id="allRequestsTable">
                    <tr>
                        <td>001</td>
                        <td class="hn-status-high">High</td>
                        <td>Food</td>
                        <td>Colombo</td>
                        <td></td>
                        <td>5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button class="btn-viewed">Approve</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </main>
    <?php } ?>
  
<script>
    const today = new Date();

    const dayOptions = { weekday: 'long' };
    const dateOptions = { day: '2-digit', month: 'long', year: 'numeric' };

    document.getElementById("today-day").innerText =
        today.toLocaleDateString('en-GB', dayOptions);

    document.getElementById("today-date").innerText =
        today.toLocaleDateString('en-GB', dateOptions);

        

   document.addEventListener("DOMContentLoaded", () => {
          totalReliefRequestCount();
          lowSeverityCasesCount();
          mediumRequestCount();
          getAllReleifRequests();
          highSeverityForReleifReq();
    })
    

</script>

<?php
    include "../common/header.php";
    include "../common/footer.php";
    ?>
