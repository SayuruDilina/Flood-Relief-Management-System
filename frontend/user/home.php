<?php include '../common/header.php'; 
?>

<body style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)), url('../images/background-img-home.jpg'); background-size: cover; background-position: center; background-attachment: fixed; ">
    <?php include './user-navbar.php' 
    ?>
    
    <div class="container">
        <section class="heading-section">
            <h1 class="heading">Welcome to Aqua<span style="color: var(--primary-teal)">Relief</span></h1>
            <p class="lead fw-bold" style="color: #f6ffff">Swift Assistance and Flood Management Support</p>
        </section>

        <div class="row g-4 justify-content-center mb-5">
            <div class="col-md-5">
                <a href="./user-relief-form.php" class="service-card">
                    <div class="icon-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-person-raised-hand" viewBox="0 0 16 16">
                            <path
                                d="M6 6.207v9.043a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H6.236a1 1 0 0 1-.447-.106l-.33-.165A.83.83 0 0 1 5 2.488V.75a.75.75 0 0 0-1.5 0v2.083c0 .715.404 1.37 1.044 1.689L5.5 5c.32.32.5.754.5 1.207" />
                            <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                        </svg>
                    </div>
                    <h3 class="brand-title">Request Relief</h3>
                    <p class="text-muted">Submit your request for food, water, medicine, or shelter assistance.</p>
                </a>
            </div>

            <div class="col-md-5">
                <a href="./view-relief-request.php" class="service-card">
                    <div class="icon-box">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3 class="brand-title">Track Status</h3>
                    <p class="text-muted">Check the progress of your submitted requests and see updates from officials.
                    </p>
                </a>
            </div>
        </div>

       
           
                <div id="alertts">
                
            </div>
           
        
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
         viewAlertsForUsers();
          
    })

    </script>
    <?php include './user-footer.php'; 
    ?>
    <?php include '../common/footer.php'; 
    ?>