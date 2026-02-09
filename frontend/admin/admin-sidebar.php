<?php include '../common/header.php';
?>
  <div class="container-fluid">
    <nav class="col-md-3 col-lg-2 d-md-block admin-sidebar collapse p-0">
      <div class="d-flex flex-column h-100">
                
        <div class="brand-wrapper">
          <a class="brand-box" href="admin.html">
            <img src="../images/aquarelief-logo.png" alt="AquaRelief Logo" class="brand-logo">
          </a>
        </div>

        <div class="nav-content mt-4">
          <a href="#" class="sidebar-link">
            <i class="fas fa-home me-2"></i> Overview
          </a>

          <a href="#" class="sidebar-link">
            <i class="fas fa-hand-holding-medical me-2"></i> Relief Requests
          </a>

          <a href="#" class="sidebar-link">
            <i class="fas fa-users me-2"></i> Registered Users
          </a>

          <a href="#" class="sidebar-link">
            <i class="fas fa-file-invoice me-2"></i> System Reports
          </a>

        </div>

        <div class="sidebar-footer">
          <hr class="mx-3 text-white opacity-25">
            <a href="#" class="sidebar-link text-danger">
              <i class="fas fa-sign-out-alt me-2"></i> Logout
            </a>
        </div>
        
      </div>
    </nav>
  </div>
<?php include '../common/footer.php';
?>