<?php
include '../common/header.php'; 
?>

    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4 no-print">
            
            <a onclick="history.back()" class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-arrow-left me-2"></i> Back
            </a>

            <button class="btn btn-primary btn-print" 
                onclick="window.print()">
                <i class="fas fa-print me-2"></i>Export Report
            </button>
        </div>

        <div class="card report-container shadow-sm border-0 p-5 bg-white mx-auto">

            <div class="report-header d-flex justify-content-between align-items-center pb-4 mb-5">
                
                <div>
                    <img src="../images/aquarelief-logo.png" alt="Logo" class="brand-logo-report">
                    <p class="text-muted small">The Flood Relief Management System</p>
                </div>

                <div class="text-end">
                    <h5 class="fw-bold mb-0">USER SUMMARY REPORT</h5>
                    <p id="reportId" class="text-muted mb-1">REF: #AQ-2026-1092</p>
                    <span class="badge bg-success">Status: Verified</span>
                </div>

            </div>

            <h5 class="section-divider fw-bold">1. Personal Information</h5>
            <div class="row px-3">

               <div class="col-md-4">
    <div class="info-label">Full Name</div>
    <div class="info-value" id="userFullname"></div>
</div>

<div class="col-md-4">
    <div class="info-label">Date of Birth</div>
    <div class="info-value" id="userDOB"></div>
</div>

<div class="col-md-4">
    <div class="info-label">NIC Number</div>
    <div class="info-value" id="userNIC"></div>
</div>

<div class="col-md-8">
    <div class="info-label">Residential Address</div>
    <div class="info-value" id="userAddress"></div>
</div>

<div class="col-md-4">
    <div class="info-label">Contact Number</div>
    <div class="info-value" id="userContact"></div>
</div>

<div class="col-md-4">
    <div class="info-label">Email Address</div>
    <div class="info-value" id="userEmail"></div>
</div>

<div class="col-md-4">
    <div class="info-label">Register Date</div>
    <div class="info-value" id="userRegisterDate"></div>
</div>



            </div>

            <h5 class="section-divider fw-bold mt-4">2. Geographic Location Data</h5>
            <div class="row px-3 mb-4">
                
                <div class="col-md-6">
                    <div class="p-3 border rounded bg-light">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="small fw-bold">Province:</span>
                            <span id="userProvince" class="text-primary fw-bold">7.0840° N</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="small fw-bold">District:</span>
                            <span id="userDistrict" class="text-primary fw-bold">80.0098° E</span>
                        </div>
                    </div>
                </div>

            </div>

            <h5 class="section-divider fw-bold mt-4">3. Relief Request History</h5>
            <div class="table-responsive px-3">
                
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Date</th>
                            <th>Relief Type</th>
                            <th>Severity Level</th>
                            <th>Request Status</th>
                        </tr>
                    </thead>
                    <!-- Relief requests table -->
<tbody id="reliefRequestTable">
                        <tr>
                            <td>2026-02-10</td>
                            <td>Food & Water</td>
                            <td><span class="text-danger fw-bold">High</span></td>
                            <td><span class="text-success fw-bold">Distributed</span></td>
                        </tr>
                        <tr>
                            <td>2026-02-12</td>
                            <td>Medicine</td>
                            <td><span class="text-warning fw-bold">Medium</span></td>
                            <td><span class="text-primary fw-bold">Pending</span></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="mt-5 pt-5 text-center text-muted small border-top">
                <p>This is a system-generated document from the AquaRelief Admin Portal. <br>
                    For official use only.</p>
            </div>
        </div>
    </div>

    <script>
document.addEventListener("DOMContentLoaded", () => {

    const params = new URLSearchParams(window.location.search);
    const user_id = params.get("user_id");

    if (!user_id) {
        console.error("No user_id in URL");
        return;
    }

   
    fetch(`http://localhost/flood-Relief-Management-System/backend/system_reports/user_report.php?user_id=${user_id}`)
        .then(response => response.json())
        .then(data => {
            if (data.status !== "ok") return;

            const user = data.user;
            document.getElementById("reportId").innerText = `REF: #${user_id}`;

           
            document.getElementById("userFullname").innerText = user.fullname;
            document.getElementById("userDOB").innerText = user.DOB;
            document.getElementById("userNIC").innerText = user.NIC;
            document.getElementById("userAddress").innerText = user.street_address;
            document.getElementById("userContact").innerText = user.contact_number;
            document.getElementById("userEmail").innerText = user.email;
            document.getElementById("userRegisterDate").innerText = user.created_at;
            document.getElementById("userProvince").innerText = user.province;
            document.getElementById("userDistrict").innerText = user.district;
            
            const tableBody = document.getElementById("reliefRequestTable");
            tableBody.innerHTML = "";

            data.relief_requests.forEach(req => {
                const tr = document.createElement("tr");
                tr.innerHTML = `
                    <td>${req.created_at}</td>
                    <td>${req.type_of_relief}</td>
                    <td>${req.flood_level}</td>
                    <td>${req.current_status}</td>
                `;
                tableBody.appendChild(tr);
            });
        })
        .catch(err => console.error("Error fetching user report:", err));
});
</script>

<?php
include '../common/footer.php';
?>