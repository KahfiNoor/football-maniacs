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
        if ($method=='GET') {
            //jika metode sesuai
            //pengecekan parameter
            if (isset($_GET['id_liga'])) {
                $id_liga = $_GET['id_liga'];

                $result['status'] = [
                    "code" => 200,
                    "description" => 'Request Valid'
                ];
        
                //S:koneksi database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "db_sepakbola";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                //E:koneksi database
        
                //buat query
                $sql = "SELECT nama_liga, negara FROM tb_liga WHERE id_liga='$id_liga'";
                //eksekusi query
                $hasil_query = $conn->query($sql);
                //masukkan ke array result
                $result['result'] = $hasil_query->fetch_all(MYSQLI_ASSOC);
            } else {
                $result['status'] = [
                    "code" => 400,
                    "description" => 'Parameter Invalid'
                ];
            }
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
}

    //tampilkan data bentuk json
    echo json_encode($result);
