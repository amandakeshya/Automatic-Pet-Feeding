<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../class/nodemcu_log.php';

$database = new Database();
$db = $database->getConnection();

$item = new Nodemcu_log($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // The request is using the POST method
    $data = json_decode(file_get_contents("php://input"));

    // Check if JSON decoding was successful
    if ($data === null) {
        http_response_code(400);
        echo json_encode(array("message" => "Invalid JSON data"));
        exit;
    }

    $item->isi_makanan = $data->isi_makanan;
    $item->deteksi = $data->deteksi;
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // The request is using the GET method
    $item->isi_makanan = isset($_GET['isi_makanan']) ? $_GET['isi_makanan'] : die('wrong structure!');
    $item->deteksi = isset($_GET['deteksi']) ? $_GET['deteksi'] : die('wrong structure!');
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(array("message" => "Wrong request method"));
    exit;
}

if ($item->createLogData()) {
    http_response_code(200);
    echo json_encode(array("message" => "Data created successfully."));
} else {
    http_response_code(500);
    echo json_encode(array("message" => "Data could not be created."));
}
