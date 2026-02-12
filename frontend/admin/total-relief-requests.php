

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
        <div class="hn-content-card hn-search-card">
            <input 
                type="text" 
                class="hn-search-input" 
                placeholder="Search by district, relief type, severity...">
        </div>

        <div class="hn-top-row">

            <div class="hn-content-card hn-summary-card">
                <h3 class="hn-topic">Total Relief Requests</h3><br/> <br/>
                <p id="totalRequests" class="hn-total">01</p>
            </div>

            <div class="hn-content-card">
                <h3 class="hn-topic">Relief Requests Calendar</h3>

                <div class="hn-calendar-today">
                    <div class="hn-calendar-header">Today</div>

                    <div class="hn-today-box">
                        <div id="today-day" class="hn-today-day"></div>
                        <div id="today-date" class="hn-today-date"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="hn-content-card">
            <h3 class="hn-topic">All Relief Requests</h3>

            <div class="hn-table-wrapper">
            <table class="hn-table">
                <thead>
                    <tr>
                            <th>Relief Type</th>
                            <th>Divisional Secretariat</th>
                            <th>GN Division</th>
                            <th>Contact Person</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>No OF Family Members</th>
                            <th>Description</th>
                            <th>District</th>
                            <th>Current Status</th>
                            <th>Created At</th>
                            <th> Action</th>
                    </tr>
                </thead>
                <tbody id="allRequestsTable">
                    <tr>
                        <td>001</td>
                        <td>Food</td>
                        <td>Colombo</td>
                        <td class="hn-status-high">High</td>
                        <td>5</td>
                        <td>2026-02-01</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Medicine</td>
                        <td>Gampaha</td>
                        <td class="hn-status-medium">Medium</td>
                        <td>3</td>
                        <td>2026-02-02</td>
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
</script>

<?php
    include "../common/header.php";
    include "../common/footer.php";
    ?>
