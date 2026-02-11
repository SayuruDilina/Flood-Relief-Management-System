

    <?php include './admin-sidebar.php';
    ?>
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
                <p class="hn-total">01</p>
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

            <table class="hn-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Relief Type</th>
                        <th>District</th>
                        <th>Severity</th>
                        <th>Family Members</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
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
    </main>
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
