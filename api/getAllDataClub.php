<?php

//header hasil berbentuk json
header("Content-Type:applicatiion/json");

// tangkap key
$header = apache_request_headers();
$key = $header['key'];

$method = $_SERVER['REQUEST_METHOD'];

//variabel hasil
$result = array();

//S:koneksi database
require_once('../config.php');
//E:koneksi database

// queri token
$sql = "SELECT key_token FROM users WHERE key_token='$key'";
$user = $conn->query($sql);

if ($user->num_rows > 0) {
    // jika key valid
    if ($method == 'GET') {
        //jika metode sesuai
        $result['status'] = [
            "code" => 200,
            "description" => 'Request Valid'
        ];

        //buat query
        $sql = "SELECT nama_club, kota, nama_liga FROM tb_club INNER JOIN tb_liga ON tb_liga.id_liga = tb_club.id_liga";
        //eksekusi query
        $hasil_query = $conn->query($sql);
        //masukkan ke array result
        $result['result'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
    } else {
        //jika metode tidak
        $result['status'] = [
            "code" => 400,
            "description" => 'Request Not Valid'
        ];
    }
} else {
    //jika key tidak
    $result['status'] = [
        "code" => 400,
        "description" => 'API Key/Token Not Valid'
    ];
}

//tampilkan data bentuk json
echo json_encode($result);
