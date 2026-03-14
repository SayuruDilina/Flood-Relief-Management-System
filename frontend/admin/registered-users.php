<?php
include '../common/header.php';

?>

<div class="av-main col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4"> 
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
        
        <div>
            <h2 class="brand-text m-0">Registered <span class="text-primary">Users</span></h2>
            <p class="text-muted small">All AquaRelief Users</p>
        </div>
        <hr class="av-divider">

    <div class="avv-container">
        <div class="av-cards">

            <div class="av-card border-bottom border-success border-5">
                <h3><b>Total Registered Users</b></h3>
                <div id="totalUsers" class="av-count text-success"></div>
                <p class="text-muted small mt-2">Active Members</p>
            </div>

            <div class="av-card border-bottom border-warning border-5">
                <h3><b>New Signups</b></h3>
                <div id="newSignups" class="av-count text-warning"></div>
                <p class="text-muted small mt-2">Joined Since Yesterday</p>
            </div>

        </div>


        <div class="avv-table-section">

            <div class="av-table-header">
                <h5 class="fw-bold">All Registered Users</h5>
            </div>

            <table class="avv-table">
                <thead>
                    <tr>
                        <th><b>User ID</b></th>
                        <th><b>NIC</b></th>
                        <th><b>Full Name</b></th>
                        <th><b>District</b></th>
                        <th><b>Contact Number</b></th>
                        <th><b>Email</b></th>
                        <th><b>Action</b></th>
                    </tr>
                </thead>

                <tbody id="registeredUsersTable">
                    <tr>
                        <td><b>200323400600</b></td>
                        <td><b>Wahana Kumarathunge</b></td>
                        <td><b>Colombo</b></td>
                        <td><b>077777777</b></td>
                        <td>
                            <button class="avv-more-btn" onclick="viewUser('200323400600')">
                                More
                            </button>

                            <button class="avv-delete-btn" onclick="confirmDelete('199012345678')">
                                Delete
                            </button>

                        </td>
                    </tr>

                    <tr>
                        <td><b>200323400601</b></td>
                        <td><b>Nawaloka Kumarathunge</b></td>
                        <td><b>Colombo</b></td>
                        <td><b>0756666666</b></td>
                        <td>
                            <button class="avv-more-btn" onclick="viewUser('200323400601')">
                                More
                            </button>
                            <button class="avv-delete-btn" onclick="confirmDelete('199012345678')">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
</div> 

<?php } ?>


<?php
include '../common/footer.php';
?>