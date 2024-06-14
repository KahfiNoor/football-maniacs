<?php
session_start();

require_once('config.php');

// Proses login
if (isset($_POST['submit'])) {
    // tangkap input form
    $nama = $_POST['nama'];
    $uname = $_POST['uname'];
    $passwd = md5($_POST['passwd']);
    $key = md5($uname . $passwd);

    // sql regis
    $sql = "INSERT INTO users(nama, username, password, key_token) VALUES('$nama', '$uname', '$passwd', '$key')";
    // execute sql
    $conn->query($sql);

    // sql login
    $sql = "SELECT * FROM users WHERE username='$uname' AND password='$passwd'";
    // execute sql
    $result = $conn->query($sql);

    // Cek apakah username dan password sesuai
    if ($result->num_rows > 0) {
        // Login berhasil, mengambil data user dari database

        // sql login
        $row = mysqli_fetch_array($result);
        $nama = $row['nama'];
        $key = $row['key_token'];

        $_SESSION['log'] = true;
        $_SESSION['nama'] = $nama;
        $_SESSION['key'] = $key;
        $_SESSION['uname'] = $uname;

        header("location: beranda.php");
    }
}

if (isset($_SESSION['log']) === true) {
    header("Location:beranda.php");
} else {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>API Sepak Bola - Register</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/style_auth.css">
    </head>

    <body>

        <!-- Register Section -->
        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black box">
                            <div class="row g-0 p-0">
                                <div class="col-lg-6">
                                    <a href="index.php#home" class="text-decoration-none px-3 text-black"><i class="fas fa-solid fa-arrow-left fa-lg mt-3"></i> Back</a>
                                    <div class="card-body p-md-3 mx-md-4">
                                        <div class="text-center">
                                            <h4 class="mt-1 mb-4 pb-1">We are Superfans</h4>
                                        </div>
                                        <form action="#" method="POST">
                                            <p class="text-center">Create your account to use the API</p>
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="nama">Name</label>
                                                <input type="text" id="nama" name="nama" class="form-control" autofocus/>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="uname">Username</label>
                                                <input type="text" id="uname" name="uname" class="form-control" />
                                            </div>
                                            <div class="form-outline mb-4">
                                                <label class="form-label" for="passwd">Password</label>
                                                <input type="password" id="passwd" name="passwd" class="form-control" />
                                            </div>

                                            <div class="text-center pt-1 mb-5 pb-1">
                                                <button class="btn btn-danger gradient-custom-2 mb-3" type="submit" name="submit">
                                                    Sign Up <i class="fas fa-sign-in-alt"></i>
                                            </button>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-center pb-4">
                                                <p class="mb-0 me-2">I have an account? <a href="login.php" class="text-danger text-decoration-none fw-bold">Sign In</a></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center justify-content-center text-white">
                                    <div class="card reg-card position-relative rounded-5">
                                        <img src="assets/img/regis-image.jpg" class="card-img-top" alt="Registration Image">
                                        <div class="card-body card-img-overlay mb-5 text-center d-flex flex-column align-items-center justify-content-end">
                                            <div class="col-lg-8">
                                                <h3 class="card-title text-warning">Build your application with Football Maniacs</h3>
                                                <p class="card-text small mb-5 text-white">
                                                    The Football Maniacs provides comprehensive data and functionalities to integrate global football leagues, clubs, player information, and team details with API concept into your application.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Scripts -->
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Font Awesome JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    </body>

    </html>

<?php } ?>