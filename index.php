<?php
session_start();
if (isset($_SESSION['log'])) {
    header("Location:beranda.php");
} else{ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Sepak Bola</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="header" id="home">

        <!-- Hero Section -->
        <section class="hero text-center">
            <!-- Jumbotron -->
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="display-4">Welcome to Football Maniacs</h1>
                            <p class="lead">We provide excellent services API for Football.</p>
                            <a href="login.php" class="py-1 px-3 rounded-2 btn btn-sm btn-danger">Sign In</a>
                            <a href="register.php" class="py-1 px-3 rounded-2 btn btn-sm btn-outline-light">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-3">
            <div class="container">
                <a class="navbar-brand" href="#home">Football Maniacs</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="docs.php">Docs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Projects Section -->
    <section id="features" class="py-5 bg-dark text-white">
        <div class="container">
            <h2 class="mb-5 text-center">Features</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card project-card position-relative">
                        <img src="assets/img/feature-image-1.jpg" class="card-img-top" alt="Project 1" height="236px">
                        <div class="card-body card-img-overlay">
                            <h5 class="card-title">League</h5>
                            <p class="card-text">Using API for looking Football League List and League Country</p>
                            <a href="docs.php#section2" class="card-text btn btn-warning btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card project-card position-relative">
                        <img src="assets/img/feature-image-2.jpg" class="card-img-top" alt="Project 1" height="236px">
                        <div class="card-body card-img-overlay">
                            <h5 class="card-title">Club</h5>
                            <p class="card-text">Using API for looking Football Club List and League Club</p>
                            <a href="docs.php#section3" class="card-text btn btn-warning btn-sm">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card project-card position-relative">
                        <img src="assets/img/feature-image-3.jpg" class="card-img-top" alt="Project 1" height="236px">
                        <div class="card-body card-img-overlay">
                            <h5 class="card-title">Player</h5>
                            <p class="card-text">Using API for looking Football Player List, Player Club, Player Rating, and Player Position</p>
                            <a href="docs.php#section4" class="card-text btn btn-warning btn-sm bold">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="text-center">My Team</h2>
                <div class="col-lg-5 rounded d-flex flex-start bg-light m-3 mt-5 py-4">
                    <div class="col-lg-9 p-3 profile1-teks">
                        <h4>Muhammad Kahfy Noor Alwani</h4>
                        <p>
                            Hello! Superfans. <br />
                            I am a beginner programmer and a student at Ujung Pandang State Polytechnic. <br />
                            Me and My friend are build a Football API to provide a list of leagues, clubs, and world Football players.
                        </p>
                    </div>
                    <div class="col-lg-3 py-4">
                        <img src="assets/img/kahfi.jpg" alt="Profile Image" class="img-fluid rounded-circle profile1">
                    </div>
                </div>
                <div class="col-lg-5 mt-5 d-flex flex-start bg-light rounded py-4 m-3 align-item-center">
                    <div class="col-lg-3 py-4">
                        <img src="assets/img/fitrah.jpg" alt="Profile Image" class="img-fluid rounded-circle profile2">
                    </div>
                    <div class="col-lg-9 p-3 profile2-teks">
                        <h4>Achmad Fitrah</h4>
                        <p>
                            Hello! Superfans. <br />
                            I am a beginner programmer and a student at Ujung Pandang State Polytechnic. <br />
                            Me and My friend are build a Football API to provide a list of leagues, clubs, and world Football players.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2023 Football Maniacs. All rights reserved.
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>
<?php } ?>
