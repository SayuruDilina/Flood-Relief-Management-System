<?php
include '../common/header.php';

?>

<div class="av-main col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4"> 
     <?php include './admin-sidebar.php'; 
    ?>
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
                        <th><b>NIC</b></th>
                        <th><b>Full Name</b></th>
                        <th><b>District</b></th>
                        <th><b>Contact Number</b></th>
                        <th><b>Action</b></th>
                    </tr>
                </thead>

                <tbody>
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

<script>
    function viewUser(nic) {
        window.location.href = "user-summary.php?nic=" + nic;
    }
</script>


<?php
include '../common/footer.php';
?>