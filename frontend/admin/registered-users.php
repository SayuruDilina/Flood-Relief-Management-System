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
    <div class="avv-container">

        <h1 class="avv-title">Registered Users Overview</h1>
        <hr class="avv-dividerr">

        <div class="avv-cards">

            <div class="avv-card blue">
                <h3><b>Total Registered Users</b></h3>
                <h2>125</h2>
            </div>

            <div class="avv-card yellow">
                <h3><b>Pending Relief Requests</b></h3>
                <h2>12</h2>
            </div>

            <div class="avv-card red">
                <h3><b>High Severity Cases</b></h3>
                <h2>42</h2>
            </div>

        </div>


        <div class="avv-table-section">

            <div class="avv-table-header">
                <h2><b>Registered Users</b></h2>
                <a href="#">View All</a>
            </div>

            <table>
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