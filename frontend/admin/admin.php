<?php
include '../common/header.php';
?>



<div class="av-dashboard">

    <?php include './admin-sidebar.php'; 
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
    <main class="av-main col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        
        <div>
            <h2 class="brand-text m-0">System <span class="text-primary">Overview</span></h2>
            <p class="text-muted small">Welcome to the Admin Portal!</p>
        </div>

        <hr class="av-divider">
        <div class="av-cards">
            <div class="av-card border-bottom border-primary border-5">
                <h3>Total Registered Users</h3>
                <div id="totalUsers" class="av-count text-primary"></div>
            </div>

            <div class="av-card border-bottom border-warning border-5">
                <h3>Pending Relief Requests</h3>
                <div id="pendingRequests" class="av-count text-warning">15</div>
            </div>

            <div class="av-card border-bottom border-danger border-5">
                <h3>High Severity Cases</h3>
                <div id="highSeverityCases" class="av-count text-danger">42</div>
            </div>
        </div>


        <div class="av-table-box">
            <div class="av-table-header">
                <h5 class="fw-bold mb-4">Recent Incoming Requests</h5>
                <a class="view-all-link" href="total-relief-requests.php">View All</a>
            </div>
            <div class="av-table-wrapper">
                <table class="av-table-new">
                    <thead>
                        <tr>
                            <th>Relief Type</th>
                            <th>Severity Type</th>
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
                            <th>ACCEPT</th>
                             <th>REJECT</th>
                        </tr>
                    </thead>
                    <tbody id="highPendingRequestsTable">
                        <tr>
                            <td>199012345678</td>
                            <td class="status high">High</td>
                            <td><strong>Nimal Siriwardena</strong></td>
                            <td>Gampaha</td>
                            <td><span class="av-status">Active</span></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</div>
<?php } ?>
  


<?php
include '../common/footer.php';
?>
































<?php
include '../common/footer.php';
?>