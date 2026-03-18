<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

  <div class="container-fluid">
    <nav class="col-md-3 col-lg-2 d-md-block admin-sidebar collapse p-0">
      <div class="d-flex flex-column h-100">
                
        <div class="brand-wrapper">
          <a class="brand-box" href="./admin.php">
            <img src="../images/aquarelief-logo.png" alt="AquaRelief Logo" class="brand-logo">
          </a>
        </div>

        <div class="nav-content mt-4">
          <a href="./admin.php" class="sidebar-link <?php echo ($current_page == 'admin.php') ? 'active' : ''; ?>">
            <i class="fas fa-home me-2"></i> Overview
          </a>

          <a href="./total-relief-requests.php" class="sidebar-link <?php echo ($current_page == 'total-relief-requests.php') ? 'active' : ''; ?>">
            <i class="fas fa-hand-holding-medical me-2"></i> Relief Requests
          </a>

          <a href="./registered-users.php" class="sidebar-link <?php echo ($current_page == 'registered-users.php') ? 'active' : ''; ?>">
            <i class="fas fa-users me-2"></i> Registered Users
          </a>

          <a href="./system-report.php" class="sidebar-link <?php echo ($current_page == 'system-report.php') ? 'active' : ''; ?>">
            <i class="fas fa-file-invoice me-2"></i> System Reports
          </a>
          
          <a href="./emergency-alerts.php" class="sidebar-link <?php echo ($current_page == 'emergency-alerts.php') ? 'active' : ''; ?>">
            <i class="fas fa-bullhorn me-2"></i> Send Alerts
          </a>

        </div>

        <div class="sidebar-footer">
          <hr class="mx-3 text-white opacity-25">
            <a onclick="logOut()" href="#" class="sidebar-link text-danger">
              <i class="fas fa-sign-out-alt me-2"></i> Logout
            </a>
        </div>
        
      </div>
    </nav>
  </div>
