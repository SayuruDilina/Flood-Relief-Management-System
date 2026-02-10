<?php
include '../common/header.php';
?>
<div class="av-dashboard">
    <main class="av-main">

        <div class="av-header">
            <h1>Overview</h1>
        </div>
        <hr class="av-divider">
        <div class="av-cards">
            <div class="av-card blue">
                <h3>Total Registered Users</h3>
                <div class="av-count">125</div>
            </div>

            <div class="av-card yellow">
                <h3>Pending Relief Requests</h3>
                <div class="av-count">12</div>
            </div>

            <div class="av-card red">
                <h3>High Severity Cases</h3>
                <div class="av-count">42</div>
            </div>
        </div>


        <div class="av-table-box">
            <div class="av-table-header">
                <h2>Recent Incoming Requests</h2>
                <a href="#">View All</a>
            </div>
            <div class="av-table">
                <table>
                    <thead>
                        <tr>
                            <th>NIC Number</th>
                            <th>Name</th>
                            <th>Area</th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>199012345678</td>
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



<?php
include '../common/footer.php';
?>
































<?php
include '../common/footer.php';
?>