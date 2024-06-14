<?php
session_start();
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
    <link rel="stylesheet" href="assets/css/style_docs.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">
    <header class="header" id="home">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-3">
            <div class="container">
                <a class="navbar-brand" href="#home">Football Maniacs</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <?php if (isset($_SESSION['log']) === true) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="beranda.php#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="beranda.php#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="docs.php">Docs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-danger" href="beranda.php#api-key">Your API Key</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#features">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="docs.php">Docs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Sign In</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Documentations -->
    <section id="documentations" class="py-5 mt-5">
        <div class="container">
            <h2 class="text-center">Documentations</h2>
            <div class="row justify-content-evenly mt-5 py-3">
                <div class="col-md-4 d-flex justify-content-between">
                    <nav class="navbar-vertical" id="sectionNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item nav-section">
                                <a class="nav-link" href="#documentations">Football Maniacs Docs</a>
                            </li>
                            <li class="nav-item nav-section">
                                <a class="nav-link" href="#section1">User Guide</a>
                            </li>
                            <li class="nav-item nav-section">
                                <a class="nav-link" href="#section2">League</a>
                                <a href="#sub-section21" class="nav-link sub-nav"><i class="fas fa-solid fa-caret-right"></i> All League</a>
                                <a href="#sub-section-content211" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Endpoint All League</a>
                                <a href="#sub-section-content212" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Parameter All League</a>
                                <a href="#sub-section-content213" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Request All League</a>
                                <a href="#sub-section-content214" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Response All League</a>
                                <a href="#sub-section22" class="nav-link sub-nav"><i class="fas fa-solid fa-caret-right"></i> One League</a>
                                <a href="#sub-section-content221" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Endpoint One League</a>
                                <a href="#sub-section-content222" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Parameter One League</a>
                                <a href="#sub-section-content223" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Request One League</a>
                                <a href="#sub-section-content224" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Response One League</a>
                            </li>
                            <li class="nav-item nav-section">
                                <a class="nav-link" href="#section3">Club</a>
                                <a href="#sub-section31" class="nav-link sub-nav"><i class="fas fa-solid fa-caret-right"></i> All Club</a>
                                <a href="#sub-section-content311" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Endpoint All Club</a>
                                <a href="#sub-section-content312" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Parameter All Club</a>
                                <a href="#sub-section-content313" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Request All Club</a>
                                <a href="#sub-section-content314" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Response All Club</a>
                                <a href="#sub-section32" class="nav-link sub-nav"><i class="fas fa-solid fa-caret-right"></i> One Club</a>
                                <a href="#sub-section-content321" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Endpoint One Club</a>
                                <a href="#sub-section-content322" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Parameter One Club</a>
                                <a href="#sub-section-content323" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Request One Club</a>
                                <a href="#sub-section-content324" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Response One Club</a>
                            </li>

                            <li class="nav-item nav-section">
                                <a class="nav-link" href="#section4">Player</a>
                                <a href="#sub-section41" class="nav-link sub-nav"><i class="fas fa-solid fa-caret-right"></i> All Player</a>
                                <a href="#sub-section-content411" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Endpoint All Player</a>
                                <a href="#sub-section-content412" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Parameter All Player</a>
                                <a href="#sub-section-content413" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Request All Player</a>
                                <a href="#sub-section-content414" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Response All Player</a>
                                <a href="#sub-section42" class="nav-link sub-nav"><i class="fas fa-solid fa-caret-right"></i> One Player</a>
                                <a href="#sub-section-content421" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Endpoint One Player</a>
                                <a href="#sub-section-content422" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Parameter One Player</a>
                                <a href="#sub-section-content423" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Request One Player</a>
                                <a href="#sub-section-content424" class="nav-link sub-sec"><i class="fas fa-solid fa-caret-right"></i> Contoh Response One Player</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-8 mt-0" id="sectionContent">
                    <div id="section1" class="section-content">
                        <h2># Football Maniacs User Guide</h2>
                        <p>Selamat datang di Football Maniacs, layanan terpercaya yang menyediakan akses mudah dan cepat ke daftar liga, klub, dan pemain sepak bola di seluruh dunia. Dengan menggunakan API kami, Anda dapat mengakses informasi terkini tentang liga-liga terkenal, klub-klub ternama, serta data lengkap tentang para pemain sepak bola terkemuka.</p>
                        <p>Dokumentasi ini menjelaskan cara mengakses layanan api Football Maniacs. Terdapat beberapa endpoint yang bisa diakses
                            dalam 1 akun atau api key.</p>
                    </div>
                    <!-- End Section User Guide -->

                    <!-- Start Section League -->
                    <div id="section2" class="section-content">
                        <h2># League</h2>
                        <p>Endpoint League dapat manampilkan daftar semua liga sepak bola dunia dengan "All League" dan dapat melihat 1 detail dari liga sepak bola dunia dengan "One League".</p>
                        <div id="sub-section21" class="section-content">
                            <h4># All League</h4>
                            <p>Method "All League" digunakan untuk mendapatkan daftar liga sepak bola di Dunia.</p>
                            <h6 id="sub-section-content211" class="section-content"># Endpoint All League</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Endpoint</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>http://localhost/api_sepakbola/api/getAllDataLeague.php</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">HTTPS</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content212" class="section-content"># Parameter All League</h6>
                            <table class="table table-striped table-hover table-responsive table-danger">
                                <thead>
                                    <tr>
                                        <th>Method</th>
                                        <th>Parameter</th>
                                        <th>Tipe</th>
                                        <th>Response</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>GET/HEAD</td>
                                        <td>key</td>
                                        <td>String</td>
                                        <td>JSON</td>
                                        <td>API Key</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 id="sub-section-content213" class="section-content"># Contoh Request</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Request</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>&lt;?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost/api_sepakbola/api/getAllDataLeague.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: your-api-key"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo htmlspecialchars($response);
} ?&gt;</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">PHP</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content214" class="section-content"># Contoh Response</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Response</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "result": [
        {
            "nama_liga": "Premier League",
            "negara": "Inggris"
        },
        {
            "nama_liga": "LaLiga",
            "negara": "Spanyol"
        },
        {
            "nama_liga": "Bundesliga",
            "negara": "Jerman"
        },
        {
            "nama_liga": "Serie A",
            "negara": "Italia"
        },
        {
            "nama_liga": "Ligue 1",
            "negara": "Perancis"
        }
    ]
}</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">JSON</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="sub-section22" class="section-content">
                            <h4># One League</h4>
                            <p>Method "One League" digunakan untuk mendapatkan detail 1 liga sepak bola di Dunia.</p>
                            <h6 id="sub-section-content221" class="section-content"># Endpoint One League</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Endpoint</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>http://localhost/api_sepakbola/api/getOneDataLeague.php?id_liga=1</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">HTTPS</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content222" class="section-content"># Parameter One League</h6>
                            <table class="table table-striped table-hover table-responsive table-danger">
                                <thead>
                                    <tr>
                                        <th>Method</th>
                                        <th>Parameter</th>
                                        <th>Tipe</th>
                                        <th>Response</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>GET/HEAD</td>
                                        <td>key</td>
                                        <td>String</td>
                                        <td>JSON</td>
                                        <td>API Key</td>
                                    </tr>
                                    <tr>
                                        <td>GET</td>
                                        <td>id_liga</td>
                                        <td>Int</td>
                                        <td>JSON</td>
                                        <td>Id Liga</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 id="sub-section-content223" class="section-content"># Contoh Request</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Request</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>&lt;?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost/api_sepakbola/api/getOneDataLeague.php?id_liga=1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: your-api-key"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo htmlspecialchars($response);
} ?&gt;</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">PHP</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content224" class="section-content"># Contoh Response</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Response</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "result": [
        {
            "nama_liga": "Premier League",
            "negara": "Inggris"
        }
    ]
}</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">JSON</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Section League -->

                    <!-- Start Section Club -->
                    <div id="section3" class="section-content">
                        <h2># Club</h2>
                        <p>Endpoint Club dapat manampilkan daftar semua club yang ada dalam daftar liga sepak bola dunia dengan "All Club" dan dapat melihat 1 detail dari club sepak bola dunia dengan "One Club".</p>
                        <div id="sub-section31" class="section-content">
                            <h4># All Club</h4>
                            <p>Method "All Club" digunakan untuk mendapatkan daftar club dalam liga sepak bola di Dunia.</p>
                            <h6 id="sub-section-content311" class="section-content"># Endpoint All Club</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Endpoint</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>http://localhost/api_sepakbola/api/getAllDataClub.php</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">HTTPS</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content312" class="section-content"># Parameter All Club</h6>
                            <table class="table table-striped table-hover table-responsive table-danger">
                                <thead>
                                    <tr>
                                        <th>Method</th>
                                        <th>Parameter</th>
                                        <th>Tipe</th>
                                        <th>Response</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>GET/HEAD</td>
                                        <td>key</td>
                                        <td>String</td>
                                        <td>JSON</td>
                                        <td>API Key</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 id="sub-section-content313" class="section-content"># Contoh Request</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Request</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>&lt;?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost/api_sepakbola/api/getAllDataClub.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: your-api-key"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo htmlspecialchars($response);
} ?&gt;</code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">PHP</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content314" class="section-content"># Contoh Response</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Response</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "result": [
        {
            "nama_club": "Manchester United",
            "kota": "Manchester",
            "nama_liga": "Premier League"
        },
        {
            "nama_club": "Liverpool",
            "kota": "Liverpool",
            "nama_liga": "Premier League"
        },
        {
            "nama_club": "Manchester City",
            "kota": "Manchester",
            "nama_liga": "Premier League"
        }
    ]
}</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">JSON</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="sub-section32" class="section-content">
                            <h4># One Club</h4>
                            <p>Method "One Club" digunakan untuk mendapatkan detail 1 club dalam daftar liga sepak bola di Dunia.</p>
                            <h6 id="sub-section-content321" class="section-content"># Endpoint One Club</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Endpoint</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>http://localhost/api_sepakbola/api/getOneDataClub.php?id_club=15</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">HTTPS</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content322" class="section-content"># Parameter One Club</h6>
                            <table class="table table-striped table-hover table-responsive table-danger">
                                <thead>
                                    <tr>
                                        <th>Method</th>
                                        <th>Parameter</th>
                                        <th>Tipe</th>
                                        <th>Response</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>GET/HEAD</td>
                                        <td>key</td>
                                        <td>String</td>
                                        <td>JSON</td>
                                        <td>API Key</td>
                                    </tr>
                                    <tr>
                                        <td>GET</td>
                                        <td>id_club</td>
                                        <td>Int</td>
                                        <td>JSON</td>
                                        <td>Id Club dalam Liga</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 id="sub-section-content323" class="section-content"># Contoh Request</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Request</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>&lt;?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost/api_sepakbola/api/getOneDataClub.php?id_club=15",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: your-api-key"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo htmlspecialchars($response);
} ?&gt;</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">PHP</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content324" class="section-content"># Contoh Response</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Response</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "result": [
        {
            "nama_club": "Union Berlin",
            "kota": "Berlin ",
            "nama_liga": "Bundesliga"
        }
    ]
}</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">JSON</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Section Club -->

                    <!-- Start Section Player -->
                    <div id="section4" class="section-content">
                        <h2># Player</h2>
                        <p>Endpoint Player dapat manampilkan daftar semua player yang ada dalam club sepak bola dunia dengan "All Player" dan dapat melihat detail dari player sepak bola dunia dengan "One Player".</p>
                        <div id="sub-section41" class="section-content">
                            <h4># All Player</h4>
                            <p>Method "All Player" digunakan untuk mendapatkan daftar player dalam club sepak bola di Dunia.</p>
                            <h6 id="sub-section-content411" class="section-content"># Endpoint All Player</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Endpoint</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>http://localhost/api_sepakbola/api/getAllDataPlayer.php</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">HTTPS</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content412" class="section-content"># Parameter All Player</h6>
                            <table class="table table-striped table-hover table-responsive table-danger">
                                <thead>
                                    <tr>
                                        <th>Method</th>
                                        <th>Parameter</th>
                                        <th>Tipe</th>
                                        <th>Response</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>GET/HEAD</td>
                                        <td>key</td>
                                        <td>String</td>
                                        <td>JSON</td>
                                        <td>API Key</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 id="sub-section-content413" class="section-content"># Contoh Request</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Request</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>&lt;?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost/api_sepakbola/api/getAllDataPlayer.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: your-api-key"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo htmlspecialchars($response);
} ?&gt;</code>
                                        </pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">PHP</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content414" class="section-content"># Contoh Response</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Response</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "result": [
        {
            "nama": "David de Gea",
            "posisi": "GK",
            "usia": "32",
            "rating": "91",
            "foto": "",
            "nama_club": "Manchester United",
            "nama_liga": "Premier League"
        },
        {
            "nama": "Tom Heaton",
            "posisi": "GK",
            "usia": "37",
            "rating": "83",
            "foto": "",
            "nama_club": "Manchester United",
            "nama_liga": "Premier League"
        },
        {
            "nama": "Matej Kovář",
            "posisi": "GK",
            "usia": "23",
            "rating": "78",
            "foto": "",
            "nama_club": "Manchester United",
            "nama_liga": "Premier League"
        }
    ]
}</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">JSON</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="sub-section42" class="section-content">
                            <h4># One Player</h4>
                            <p>Method "One Player" digunakan untuk mendapatkan detail player dalam club sepak bola di Dunia.</p>
                            <h6 id="sub-section-content421" class="section-content"># Endpoint One Player</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Endpoint</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>http://localhost/api_sepakbola/api/getOneDataPlayer.php?id_pemain=155</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">HTTPS</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content422" class="section-content"># Parameter One Player</h6>
                            <table class="table table-striped table-hover table-responsive table-danger">
                                <thead>
                                    <tr>
                                        <th>Method</th>
                                        <th>Parameter</th>
                                        <th>Tipe</th>
                                        <th>Response</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>GET/HEAD</td>
                                        <td>key</td>
                                        <td>String</td>
                                        <td>JSON</td>
                                        <td>API Key</td>
                                    </tr>
                                    <tr>
                                        <td>GET</td>
                                        <td>id_pemain</td>
                                        <td>Int</td>
                                        <td>JSON</td>
                                        <td>Id Player dalam Club</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h6 id="sub-section-content423" class="section-content"># Contoh Request</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Request</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>&lt;?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost/api_sepakbola/api/getOneDataPlayer.php?id_pemain=155",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "key: your-api-key"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo htmlspecialchars($response);
} ?&gt;</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">PHP</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                            <h6 id="sub-section-content424" class="section-content"># Contoh Response</h6>
                            <div class="card">
                                <div class="card-header bg-danger fw-bolder fa-lg text-white ml-0 d-flex justify-content-between">
                                    <h5 class="m-0">Response</h5>
                                </div>
                                <div class="card-body bg-light text-black">
                                    <div class="code-box">
                                        <pre><code>{
    "status": {
        "code": 200,
        "description": "Request Valid"
    },
    "result": [
        {
            "nama": "Julián Álvarez",
            "posisi": "AM,P(KAKIT)",
            "usia": "23",
            "rating": "90",
            "foto": "",
            "nama_club": "Manchester City",
            "nama_liga": "Premier League"
        }
    ]
}</code></pre>
                                    </div>
                                </div>
                                <div class="card-footer bg-secondary d-flex justify-content-between text-white">
                                    <p class="fa-sm">JSON</p>
                                    <button class="btn btn-secondary btn-sm copy-btn py-sm-0 px-sm-0"><i class="fas fa-clipboard fa-lg"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Section Player -->
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

        // Buat navigasi section tetap saat melakukan scroll
        window.addEventListener("scroll", function() {
            var navbarVertical = document.querySelector(".navbar-vertical");
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > 200) {
                navbarVertical.classList.add("navbar-fixed");
            } else {
                navbarVertical.classList.remove("navbar-fixed");
            }
        });

        //navbar menu tidak menghalangi section
        document.addEventListener('DOMContentLoaded', function() {
            var navbar = document.querySelector('.navbar');
            var section = document.querySelector('#section1');
            var navbarHeight = navbar.offsetHeight;

            section.style.paddingTop = navbarHeight + 'px';
        });
    </script>
</body>

</html>