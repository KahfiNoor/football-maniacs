<?php
session_start();

$log = $_SESSION['log'];

if (!isset($_SESSION['log']) === true) {
    header("Location:index.php");
} else{
    $nama = $_SESSION['nama'];
    $key = $_SESSION['key'];

// echo "<pre>"; echo $role; echo "</pre>"; die;
?>

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
    <link rel="stylesheet" href="assets/css/style_docs.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <header class="header" id="home">

        <!-- Hero Section -->
        <section class="hero text-center">
            <!-- Jumbotron -->
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="display-4">Hello, <?=$nama?>!</h1>
                            <p class="lead">We provide excellent services API for Football.</p>
                            <a href="#features" class="py-2 px-3 rounded-2 btn btn-lg btn-danger">Get Started</a>
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
                            <a class="nav-link active text-danger" href="#api-key">Your API Key</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Projects Section -->
    <section id="features" class="py-5 bg-dark text-white">
        <div class="container">
            <h2 class="text-center">Features</h2>
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
    <section id="api-key" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="text-center">Your API Key</h2>
                <div class="row justify-content-evenly">
                    <div class="col-sm-6">
                        <div class="card small-card mt-3">
                            <div class="card-header bg-secondary d-flex justify-content-between fw-bolder fa-lg text-white">
                                <h5>API Key/Token</h5>
                            </div>
                            <div class="card-body bg-light text-black">
                                <div class="code-box">
                                    <pre><code><?=$key?></code></pre>
                                </div>
                            </div>
                            <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                <p class="fa-sm">Hashing API Key/Token</p>
                                <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan card lain di sini -->
                </div>
            </div>
        </div>
    </section>

    <div id="custom-toast" class="toast custom-toast" role="alert" data-autohide="true" data-delay="3000">
        <div class="toast-header">
            <strong class="me-auto">Notifikasi</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Tutup"></button>
        </div>
        <div class="toast-body bg-success text-white">
            Kode berhasil disalin!
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        &copy; 2023 Football Maniacs. All rights reserved.
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Font Awesome JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <script>
        var copyButtons = document.querySelectorAll(".copy-btn");
        var toast = document.getElementById("custom-toast");

        copyButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                copyToClipboard(this);
            });
        });

        function copyToClipboard(button) {
            var codeBox = button.parentNode.previousElementSibling.querySelector(".code-box pre");
            var code = codeBox.innerText;

            var textarea = document.createElement("textarea");
            textarea.value = code;
            document.body.appendChild(textarea);

            textarea.select();
            textarea.setSelectionRange(0, textarea.value.length);

            document.execCommand("copy");

            document.body.removeChild(textarea);

            var bsToast = new bootstrap.Toast(toast);
            bsToast.show();
        }
    </script>
</body>

</html>
<?php } ?>